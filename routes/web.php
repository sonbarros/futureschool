<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;


Route::get('/', [CursoController::class, 'index'])->name('site.index');
Route::get('/curso/{name}', [CursoController::class, 'show'])->name('curso.show');
