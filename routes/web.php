<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArchivoController;

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
    return view('auth.login');
});

Route::resource('articulos', 'App\Http\Controllers\ArticuloController');
Route::resource('archivo', 'App\Http\Controllers\ArchivoController');

Route::get('/archivo/{id}/download', [ArchivoController::class, 'download'])->name('archivo.download');






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
