<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kullanici;
use App\Http\Controllers\Sehir;
use App\Http\Controllers\VeriController;
use App\Http\Controllers\Islem;
use App\Http\Controllers\SepetController;

Route::get('/', [Kullanici::class, 'anasayfaGoster'])->middleware('tarihkontrol');

Route::get('/giris-yap', [Kullanici::class, 'girisYap'])->name('login');
Route::post('/giris-yap', [Kullanici::class, 'oturumAc']);
Route::get('/cikis-yap', [Kullanici::class, 'cikisYap']);
Route::get('/uye-ol', [Kullanici::class, 'uyeOl']);
Route::post('/uye-kaydet', [Kullanici::class, 'uyeKaydet']);
Route::get('/magaza', [Kullanici::class, 'magazaGoster']);

Route::get('/urun-ekle', [VeriController::class, 'create']);
Route::post('/urun-ekle', [VeriController::class, 'store']);

Route::get('/urunler', [VeriController::class, 'index']);
Route::get('/icerik/{id}', [VeriController::class, 'show']);
Route::get('/urun-guncelle/{id}', [VeriController::class, 'edit']);
Route::post('/urun-guncelle/{id}', [VeriController::class, 'update']);
Route::get('/urun-sil/{id}', [VeriController::class, 'destroy']);

Route::get('/sepet', [SepetController::class, 'index']);
Route::get('/sepet/ekle/{id}', [SepetController::class, 'ekle']);
Route::get('/sepet/sil/{id}', [SepetController::class, 'cikar']);

Route::get('/sehir/{id}', [Sehir::class, 'goster'])->where('id', '[0-9]+');

Route::get('/topla/{sayi1}/{sayi2}', [Islem::class, 'topla']);

Route::get('/bilgilerim', [Kullanici::class, 'bilgilerimGoster'])->middleware('oturumKontrol');