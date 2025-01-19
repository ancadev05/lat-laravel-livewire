<?php

use App\Livewire\Kategori\Kategori;
use App\Livewire\Produk;
use App\Livewire\Todolist;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', Todolist::class);
Route::get('/produk', Produk::class);

Route::get('/kategori', Kategori::class);