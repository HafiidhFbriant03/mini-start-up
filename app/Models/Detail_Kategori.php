<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Kategori extends Model
{
    protected $table = 'detail_kategori';
    protected $primarykey = 'id';
    protected $fillable = [
        'kategori_id',
        'harga',
        'stok',
        'deskripsi',
        'diskon',
        'color_id',
        'foto'
    ];
    use HasFactory;
}
