<?php

use App\Http\Controllers\perjalananController;
use App\Http\Controllers\userController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

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



Route::get('/page', function () {
    return view('Layouts.pages');
});

Route::get('/register', [userController::class, 'halamanRegister']);
Route::post('/simpanUser', [userController::class, 'simpanUser']);

Route::get('/', [loginController::class, 'halamanLogin'])->name('login');
Route::any('/postLogin', [loginController::class,'Login']);
Route::get('/logout', [loginController::class, 'Logout']);

Route::get('/dashboard', function () {
    return view('Layouts.dashboard');
})->middleware('auth');
Route::get('/page', [perjalananController::class, "index"])->middleware('auth');
Route::get('/input', [perjalananController::class, "input"])->middleware('auth');
Route::post('/simpanData', [perjalananController::class, "simpanData"])->middleware('auth');
Route::get('/urut',[perjalananController::class, 'urutkanPerjalanan'])->middleware('auth');
Route::get('/cari',[perjalananController::class, 'cariPerjalanan'])->middleware('auth');
