<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Kontrol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Eğer kullanıcı giriş yapmamışsa
        if (!Auth::check()) {
            // ana sayfaya yönlendir
            return redirect('/giris-yap')->with('mesaj', 'Bilgilerim sayfasını görüntülemek için lütfen önce giriş yapınız.');
        }

        // Aksi halde isteğe devam et
        return $next($request);
    }
}
