<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Kullanici extends Controller
{
    public function girisYap()
    {
        return view('login');
    }

    public function uyeOl()
    {
        return view('register');
    }

    public function magazaGoster()
    {
        return view('shop');
    }

    public function anasayfaGoster()
    {
        return view('index');
    }

    public function uyeKaydet(Request $request)
    {
        $veriler = $request->all();

        echo "<h3>Gelen Form Verileri:</h3>";
         foreach ($veriler as $anahtar => $deger) {
        // Eğer parola alanıysa hash'le
        if ($anahtar === 'parola' or $anahtar === 'parolatekrar') {
            // Hash::make güvenli bir tek-yönlü şifreleme (bcrypt vb.)
            $hashed = Hash::make($deger);

            // e() ile escape ederek XSS koruması sağlıyoruz
            echo e($anahtar) . ': ' . e($hashed) . '<br>';
        } else {
            // diğer alanları normal yazdır
            // e() kullanımı güvenlik için önerilir
            echo e($anahtar) . ': ' . e((string) $deger) . '<br>';
        }
    }
    

        /* $request->validate([
            'isim' => 'required|string|max:255',
            'email' => 'required|email',
            'sifre' => 'required|min:6',
        ]); */
    }
}

