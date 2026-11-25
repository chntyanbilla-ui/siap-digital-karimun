<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aplikasi extends Model
{
    protected $table = 'aplikasis';

    protected $fillable = [
        'nama',
        'opd',
        'deskripsi',
        'link',
        'status',
    ];
}