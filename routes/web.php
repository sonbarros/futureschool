<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

Route::get('/curso/tso_yellow', function () {
    return view('tso_back_yellow');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/curso/{name}', [CursoController::class, 'show']);
