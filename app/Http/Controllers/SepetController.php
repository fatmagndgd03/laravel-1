<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veri;

class SepetController extends Controller
{
    public function index()
    {
        $sepet = session()->get('sepet', []);
        $toplamFiyat = 0;
        foreach ($sepet as $urun) {
            $toplamFiyat += $urun['fiyat'] * $urun['adet'];
        }
        return view('sepet', compact('sepet', 'toplamFiyat'));
    }

    public function ekle($id)
    {
        $urun = Veri::find($id);
        if (!$urun) {
            return redirect()->back()->with('error', 'Ürün bulunamadı.');
        }

        $sepet = session()->get('sepet', []);

        if (isset($sepet[$id])) {
            $sepet[$id]['adet']++;
        } else {
            $sepet[$id] = [
                "id" => $urun->id,
                "baslik" => $urun->baslik,
                "adet" => 1,
                "fiyat" => $urun->fiyat,
                "gorsel" => $urun->gorsel
            ];
        }

        session()->put('sepet', $sepet);
        return redirect()->back()->with('success', 'Ürün sepete eklendi.');
    }

    public function cikar($id)
    {
        $sepet = session()->get('sepet');
        if (isset($sepet[$id])) {
            unset($sepet[$id]);
            session()->put('sepet', $sepet);
        }
        return redirect()->back()->with('success', 'Ürün sepetten çıkarıldı.');
    }
}
