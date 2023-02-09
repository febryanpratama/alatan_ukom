<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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


Route::group([
    'controller' => FrontController::class,

], function () {
    Route::get('/', 'index');
});

// All Routes
Route::group([
    'controller' => DashboardController::class,
], function () {
    Route::get('/dashboard', 'index')->middleware(['auth', 'verified'])->name('dashboard');
});
// End Routes


// Admin Routes
Route::group([
    'controller' => AdminController::class,
    'middleware' => ['auth', 'verified', 'role:Admin'],
    'prefix' => 'admin',
], function () {

    // List Peserta
    Route::prefix('/peserta')->group(function () {
        Route::get('/', 'indexPeserta');
        Route::get('/list', 'getPeserta');
        Route::post('/store', 'postPeserta');
        Route::post('/edit', 'editPeserta');
    });

    Route::prefix('/list-ujian')->group(function () {
        Route::get('/', 'indexUjian');
        Route::get('/list', 'getListUjian');
        Route::get('/{ticket_id}/detail', 'detailUjian');
        Route::post('/store', 'postUjian');
    });
});

Route::group([
    'controller' => UserController::class,
    'middleware' => ['auth', 'verified', 'role:PPK|Pokja'],
    'prefix' => 'user',
], function () {

    Route::prefix('/ticket')->group(function () {
        Route::get('/', 'indexTicket');
        // Route::get('/list', 'getListTicket');
        Route::get('/{ticket_id}/detail', 'detailTicket');
        // Route::post('/store', 'postTicket');
    });

    Route::prefix('dokumen-ujian')->group(function () {
        Route::get('/', 'indexDokumenUjian');
        // Route::get('/list', 'getListDokumenUjian');
        Route::post('/store', 'postDokumenUjian');
        Route::post('/edit', 'editDokumenUjian');
    });
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
