<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kullanici;
use App\Http\Controllers\Sehir;

Route::get('/', [Kullanici::class, 'anasayfaGoster']);

Route::get('/giris-yap', [Kullanici::class, 'girisYap']);
Route::get('/uye-ol', [Kullanici::class, 'uyeOl']);
Route::post('/uye-kaydet', [Kullanici::class, 'uyeKaydet']);
Route::get('/magaza', [Kullanici::class, 'magazaGoster']);

Route::get('/sehir/{id}', [Sehir::class, 'goster'])->where('id', '[0-9]+');

Route::get('/topla/{sayi1}/{sayi2}', [Islem::class, 'topla']);