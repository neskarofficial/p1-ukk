<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SppController;

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

Route::get('siswa',[SiswaController::class,'index'])->name('siswa')->middleware('guest');
Route::get('siswa/create',[SiswaController::class,'create'])->name('siswa.create')->middleware('guest');

Route::get('login',[LoginController::class,'view'])->name('login')->middleware('guest');
Route::post('login',[LoginController::class,'proses'])->name('login.proses')->middleware('guest');

Route::get('logout', [LoginController::class, 'logout'])->name('logout-petugas');

// Route::resource('spp', SiswaController::class);
Route::resource('spp', SppController::class)->middleware(['auth','level:admin']);

Route::get('/dashboard/admin',[DashboardController::class,'admin'])->name('dashboard.admin')->middleware(['auth', 'level:admin,petugas']);
Route::get('/dashboard/petugas',[DashboardController::class,'petugas'])->name('dashboard.petugas')->middleware('auth');

Route::view('error/403', 'eror.403')->name('eror.403');