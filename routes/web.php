<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComentarioController;
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
    return view('index');
});

Route::get('/acercade', function () {
    return view('Acercade');
});

Route::get('/catalogo', function () {
    return view('Catalogo');
});

Route::get('/audio', function () {
    return view('Audio');
});

Route::get('/camaras', function () {
    return view('Camaras');
});
Route::get('/contactanos', [ComentarioController::class, 'index'])->name('contactanos.index');
Route::post('/contactanos', [ComentarioController::class, 'store'])->name('contactanos.store');
Route::get('/contactanos', function () {
    return view('Contactanos');
});

Route::get('/playstation', function () {
    return view('Playstation');
});

Route::get('/tv_teatro', function () {
    return view('Tv_Teatro');
});

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

