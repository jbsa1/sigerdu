<?php

use App\Http\Controllers\Cobacontroller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "Halo cok";
});

Route::get('/coba', [Cobacontroller::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/user', [DashboardController::class, 'user']);
Route::get('/konten', [DashboardController::class, 'konten']);
Route::get('/materi', [DashboardController::class, 'materi']);

Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
