<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table = 'color';
    protected $primarykey = 'id';
    protected $fillable = [
        'color',
    ];
    use HasFactory;
}
