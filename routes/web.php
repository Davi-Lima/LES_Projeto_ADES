<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AgremiacaoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('principal');
});

Route::get('/apuracao', function () {
    return view('apuracao');
});

Route::get('/contato', function () {
    return view('fixos.contato');
});

Route::get('/admin/agremiacao', [AgremiacaoController::class, 'index']);
Route::resource('/admin/agremiacao', AgremiacaoController::class);