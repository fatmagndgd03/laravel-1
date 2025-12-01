<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veri;

class VeriController extends Controller
{
    public function create()
    {
        return view('urun_ekle');
    }

    public function store(Request $request)
    {
        $request->validate([
            'baslik' => 'required',
            'icerik' => 'required',
            'gorsel' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $veri = new Veri();
        $veri->baslik = $request->baslik;
        $veri->icerik = $request->icerik;

        if ($request->hasFile('gorsel')) {
            $imageName = time().'.'.$request->gorsel->extension();
            $request->gorsel->move(public_path('images'), $imageName);
            $veri->gorsel = $imageName;
        }

        $veri->save();

        return redirect()->back()->with('success', 'Veri başarıyla kaydedildi.');
    }
}
