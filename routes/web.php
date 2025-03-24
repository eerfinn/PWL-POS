<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\WelcomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/kategori', [KategoriController::class, 'index']);
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::put('/kategori/{id}', [KategoriController::class, 'update']);
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy']);
Route::get('/kategori/{id}/edit', [KategoriController::class, 'edit']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'store']);  
    Route::get('/{id}', [UserController::class, 'show']);
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);

    // Route::get('/user/tambah', [UserController::class, 'tambah']);
    // Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
    // Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
    // Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
    // Route::delete('/user/hapus/{id}', [UserController::class, 'hapus']);
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/level/tambah', [LevelController::class, 'tambah']);
Route::post('/level/tambah_simpan', [LevelController::class, 'tambah_simpan']);
Route::get('/level/ubah/{id}', [LevelController::class, 'ubah']);
Route::put('/level/ubah_simpan/{id}', [LevelController::class, 'ubah_simpan']);
Route::delete('/level/hapus/{id}', [LevelController::class, 'hapus']);

Route::resource('m_user', POSController::class);

// ---------------------------------------------------------------------- //

Route::get('/', [WelcomeController::class, 'index']);
