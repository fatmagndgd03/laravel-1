<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class TarihKontrol
{
    public function handle(Request $request, Closure $next)
    {
        try {
            $response = Http::timeout(5)->get('https://mertcanunal.com.tr/time.php');
            if (! $response->ok()) {
                throw new \Exception('Zaman servisi erişilemedi');
            }

            $json = $response->json();

            if (! isset($json['status']) || $json['status'] !== 'success' || ! isset($json['dateTime'])) {
                throw new \Exception('Geçersiz zaman verisi');
            }

            $dtString = $json['dateTime'];
            $tz = $json['timezone'] ?? 'Europe/Istanbul';

            $bugun = Carbon::parse($dtString, $tz);

        } catch (\Exception $e) {
            // Servis çalışmıyorsa güvenli şekilde erişimi kapat
            return redirect('/giris-yap')
                ->with('mesaj', 'Zaman doğrulanamadı, lütfen daha sonra tekrar deneyin.');
        }

        // Açılış tarihi (Europe/Istanbul saat diliminde)
        $acilisTarihi = Carbon::create(2025, 11, 1, 0, 0, 0, 'Europe/Istanbul');

        if ($bugun->lessThan($acilisTarihi)) {
            return redirect('/giris-yap')
                ->with('mesaj', 'Ana sayfa 1 Kasım 2025\'e kadar erişime kapalıdır.');
        }

        return $next($request);
    }
}
