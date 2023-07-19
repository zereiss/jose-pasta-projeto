<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpregoController;

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
    return view('welcome');
});

Route::get('/cadastro_empresa', function () {
    return view('auth.registerempresa');
})->name('cadastro_empresa');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('welcome');
    })->name('dashboard');
    
    Route::get('/cadastro_emprego', function () {
        return view('cadastro_emprego');
    })->name('cadastro_emprego');

    Route::get('/empregos', function () {
        return view('empregos');
    })->name('empregos');
    
    Route::post('/store',[EmpregoController::class, 'store'] )->name('store');

});
