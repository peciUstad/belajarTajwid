<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiControllers;

Route::get('/', [PegawaiControllers::class, 'Pegawai']);
Route::post('/tambah', [PegawaiControllers::class, 'store']);
Route::get('/hapus/{id}', [PegawaiControllers::class, 'destroy']);
Route::get('/cari', [PegawaiControllers::class, 'cari']);

?>
