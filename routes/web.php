<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('master.dashboard');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('/redirects');
})->name('dashboard');

Route::get('/redirects',[IndexController::class,'index']);

//------------------------------------------admin------------------------------------------------//
// ini buat order
Route::get('/redirects/order',[AdminController::class,'order']);
Route::put('/redirects/order',[AdminController::class,'updateorder']);
Route::delete('/redirects/order',[AdminController::class,'destroyorder']);
//buat apply
Route::get('/redirects/apply',[AdminController::class,'apply']);
Route::delete('/redirects/apply',[AdminController::class,'destroyapply']);
Route::post('/redirects/apply',[AdminController::class,'storeapply']);
//ini buat pembayaran
Route::get('/redirects/pembayaran',[AdminController::class,'pembayaran']);
Route::delete('/redirects/pembayaran',[AdminController::class,'pembayaran']);
//ini buat kelas
Route::get('/redirects/kelas',[AdminController::class,'kelas']);
Route::post('/redirects/kelas',[AdminController::class,'storekelas']);
Route::put('/redirects/kelas',[AdminController::class,'updatekelas']);
Route::delete('/redirects/kelas',[AdminController::class,'destroykelas']);
//ini buat materi
Route::get('/redirects/materi',[AdminController::class,'materi']);
Route::post('/redirects/materi',[AdminController::class,'storemateri']);
Route::put('/redirects/materi',[AdminController::class,'updatemateri']);
Route::delete('/redirects/materi',[AdminController::class,'destroymateri']);
//ini buat user
Route::get('/redirects/users',[AdminController::class,'user']);
Route::delete('/redirects/users',[AdminController::class,'destroyuser']);


//------------------------------------user------------------------------------------------//
// ::::::::::::::::::::::::::::::::::: Pembelian Pengguna ::::::::::::::::::::::::::::::::::::: //
// beli didashboard
Route::post('redirects',[UserController::class,'orderstore']);
// keranjang pembelian user
Route::get('redirects/keranjang',[UserController::class,'keranjang']);
Route::post('redirects/keranjang',[UserController::class,'storekeranjang']);
Route::delete('redirects/keranjang',[UserController::class,'destroykeranjang']);
//materi users
Route::get('redirects/{id}/kelas',[UserController::class,'kelas']);
Route::get('redirects/{id}/exams',[UserController::class,'exams']); 