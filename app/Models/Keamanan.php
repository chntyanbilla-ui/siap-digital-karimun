<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keamanan extends Model
{
    use HasFactory;

    protected $table = 'keamanans';

    protected $fillable = [
        'nama',
        'kategori',
        'deskripsi',
        'status',
    ];
}