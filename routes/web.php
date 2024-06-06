<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\DKelurahanController;
use App\Http\Controllers\DPenggunaController;
use App\Http\Controllers\DPertumbuhanController;
use App\Http\Controllers\DRtController;
use App\Http\Controllers\KelahiranController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\LsebaranController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PwaHomeController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('auth.login');
// });

// Route::get('/', function () {
//     return view('layouts.panel.master');
// });

Route::get('/', function () {
    return view('layouts.landing.master');
});

Route::resource('lsebaran', LsebaranController::class);


//PWA
Route::get('pwahome', [PwaHomeController::class])->name('pwahome');
Route::resource('kelahiran', KelahiranController::class);
Route::resource('kematian', KematianController::class);

//ADMIN
Route::get('auth', [AuthenticatedSessionController::class]);
Route::get('dberanda', [DashboardController::class, 'index'])->name('dberanda.index');
Route::resource('dkelurahan', DKelurahanController::class);
Route::resource('drt', DRtController::class);
Route::resource('dpertumbuhan', DPertumbuhanController::class);
Route::resource('dpengguna', DPenggunaController::class);

















Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
