<?php

use App\Livewire\Barang\BarangCreate;
use App\Livewire\Barang\BarangEdit;
use App\Livewire\Barang\BarangIndex;
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


Route::get('/barang', BarangIndex::class);
Route::get('/barang/create', BarangCreate::class);
Route::get('/barang/edit/{id}', BarangEdit::class);