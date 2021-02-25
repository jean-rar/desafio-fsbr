<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastrosController;

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
    return view('index');
});

Route::resource('form', 'App\Http\Controllers\CadastrosController');

Route::post('cadastro.formulario', [CadastrosController::class, 'store'])->name('cadastro.formulario');

Route::get('/', [CadastrosController::class, 'index']);