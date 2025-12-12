<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Uye extends Authenticatable
{
    protected $table = 'uyeler';

    protected $fillable = [
        'ad',
        'soyad',
        'e_posta',
        'parola',
        'yetki'
    ];

    public function getAuthPassword()
    {
        return $this->parola;
    }
}
