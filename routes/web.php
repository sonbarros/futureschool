<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UserAreaController;

Route::get('/', [CursoController::class, 'index'])->name('site.index');
Route::get('/curso/{name}', [CursoController::class, 'show'])->name('curso.show');
Route::get('/file/{id}', [FileController::class, 'show'])->name('file.show');

Auth::routes();



Route::group([
  'middleware' => [],
  'prefix' => 'configuracoes',
  //'namespace' => 'Admin'
], function () {
  Route::get('perfil', [UserAreaController::class, 'perfilForm'])->name('configs.perfil');
  Route::put('perfil', [UserAreaController::class, 'updateUser'])->name('configs.update.user');
});



Route::get('/home', 'HomeController@index')->name('home');

use Illuminate\Support\Facades\Mail;
use App\Mail\WhenRegistering;
Route::get('/mail', function(){
  Mail::to('anderson21br@gmail.com')
    ->send(new WhenRegistering());
});