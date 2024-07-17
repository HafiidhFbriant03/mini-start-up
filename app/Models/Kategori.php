<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $primarykey = 'id';
    protected $fillable = [
        'name_kategori',
        'foto'
    ];
    use HasFactory;
}
