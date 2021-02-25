<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('/cadastros', 'App\Http\Controllers\Api\CadastrosController@index');
