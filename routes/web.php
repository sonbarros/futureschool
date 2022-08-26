<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\FileController;


Route::get('/', [CursoController::class, 'index'])->name('site.index');
Route::get('/curso/{name}', [CursoController::class, 'show'])->name('curso.show');
Route::get('/file/{id}', [FileController::class, 'show'])->name('file.show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
