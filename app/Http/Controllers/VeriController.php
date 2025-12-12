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
            'fiyat' => 'required|numeric',
            'gorsel' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $veri = new Veri();
        $veri->baslik = $request->baslik;
        $veri->icerik = $request->icerik;
        $veri->fiyat = $request->fiyat;

        if ($request->hasFile('gorsel')) {
            $imageName = time() . '.' . $request->gorsel->extension();
            $request->gorsel->move(public_path('images'), $imageName);
            $veri->gorsel = $imageName;
        }

        $veri->save();

        return redirect()->back()->with('success', 'Veri başarıyla kaydedildi.');
    }
    public function index()
    {
        $veriler = Veri::all();
        return view('urunler', compact('veriler'));
    }

    public function show($id)
    {
        $veri = Veri::find($id);
        return view('icerik', compact('veri'));
    }

    public function edit($id)
    {
        $veri = Veri::find($id);
        return view('urun_guncelle', compact('veri'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'baslik' => 'required',
            'icerik' => 'required',
            'fiyat' => 'required|numeric',
            'gorsel' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $veri = Veri::find($id);
        $veri->baslik = $request->baslik;
        $veri->icerik = $request->icerik;
        $veri->fiyat = $request->fiyat;

        if ($request->hasFile('gorsel')) {
            $imageName = time() . '.' . $request->gorsel->extension();
            $request->gorsel->move(public_path('images'), $imageName);
            $veri->gorsel = $imageName;
        }

        $veri->save();

        return redirect('/')->with('success', 'Veri başarıyla güncellendi.');
    }

    public function destroy($id)
    {
        $veri = Veri::find($id);
        $veri->delete();
        return redirect()->back()->with('success', 'Veri başarıyla silindi.');
    }
}
