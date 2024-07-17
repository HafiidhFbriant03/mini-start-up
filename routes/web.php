<?php

use App\Http\Controllers\Detail_KategoriController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ministartup', [KategoriController::class, 'index']);

Route::get('/detailkategori', [Detail_KategoriController::class, 'index']);
