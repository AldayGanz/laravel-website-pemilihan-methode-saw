<?php

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

Route::get('/',[App\Http\Controllers\DashboardController::class, 'index']);


Route::get('/databenang', function () {
    return view('databenang');
});


use App\Http\Controllers\BenangController;
Route::controller(BenangController::class)->group(function() {
    Route::get('benang/', 'index');
    Route::get('benang/add', 'add');
    Route::post('benang/store', 'store');
    Route::get('benang/edit/{id}', 'edit');
    Route::post('benang/update/{id}', 'update');
    Route::get('benang/delete/{id}', 'delete');
});

use App\Http\Controllers\KriteriaController;
Route::controller(KriteriaController::class)->group(function() {
    Route::get('kriteria/', 'index');
    Route::get('kriteria/add', 'add');
    Route::post('kriteria/store', 'store');
    Route::get('kriteria/edit/{id}', 'edit');
    Route::post('kriteria/update/{id}', 'update');
    Route::get('kriteria/delete/{id}', 'delete');
});

use App\Http\Controllers\HitungController;
Route::get('/hitung', [HitungController::class, 'hitung'])->name('hitung');



