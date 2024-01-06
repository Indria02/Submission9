<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeminjamController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\loginController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [PeminjamController::class, 'index'])->name('peminjam');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/home');
});


Route::get('/mahasiswa', function () {
    Auth::login();
    return redirect('/home');
});

Route::get('/mahasiswa', function () {
    return view('/mahasiswa');
});


Route::get('/peminjam', function () {
    return view('/datapeminjam');
});

Route::get('/peminjam', [App\Http\Controllers\PeminjamController::class, 'index'])->name('peminjam');

Route::get('/mahasiswa', [App\Http\Controllers\PeminjamController::class, 'index'])->name('mahasiswa');

Route::get('/tambahpeminjam', [App\Http\Controllers\PeminjamController::class, 'tambahpeminjam'])->name('tambahpeminjam');

Route::post('/insertdata', [App\Http\Controllers\PeminjamController::class, 'insertdata'])->name('insertdata');

Route::get('/editdata/{id}', [App\Http\Controllers\PeminjamController::class, 'editdata'])->name('editdata');

Route::post('/updatedata/{id}', [App\Http\Controllers\PeminjamController::class, 'updatedata'])->name('updatedata');

Route::get('/deletedata/{id}', [App\Http\Controllers\PeminjamController::class, 'deletedata'])->name('deletedata');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
