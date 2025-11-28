<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uye extends Model
{
    protected $table = 'uyeler';

    protected $fillable = [
        'ad',
        'soyad',
        'e_posta',
        'parola',
        'yetki'
    ];
}
