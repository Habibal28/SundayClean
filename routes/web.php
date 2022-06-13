<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SendWhatsapp;
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
    return view('landing-page');
})->name("landing-page");
// Route::get('/admin-login', function () {
//     return view('login');
// });
// Route::get('/admin-dashboard', function () {
//     return view('index');
// });
Route::get('/admin-customer', function () {
    return view('customer');
});
Route::get('/service', function () {
    return view('service');
});



Route::get('/admin-dashboard', [AdminController::class,'index']);
Route::get('/admin-login', [AdminController::class,'login']);
Route::post('/admin-login', [AdminController::class,'loginStore']);
Route::get('/admin-customer', [CustomerController::class,'index'])->name('adminCustomer');
Route::get('/send-wa',[SendWhatsapp::class,'sendWa'])->name('sendWa');
Route::get('/hapus-customer/{id}', [CustomerController::class,'hapusCustomer']);
Route::post('/edit-customer', [CustomerController::class,'editCustomer']);
Route::post('/tambah-customer', [CustomerController::class,'tambahCustomer']);
Route::post('/store-customer', [CustomerController::class,'storeCustomer']);



