<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Veri extends Model
{
    protected $table = 'veriler';

    protected $fillable = [
        'baslik',
        'icerik',
        'gorsel',
    ];
}
