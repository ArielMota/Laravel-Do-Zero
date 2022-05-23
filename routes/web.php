<?php

use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\ContatoController;
use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/



Route::namespace('Site')->group(function(){
    Route::get('/',[HomeController::class,'index'])->name('site.home');

    Route::get('produtos',[CategoryController::class,'index'])->name('site.produtos');
    Route::get('produtos/{slug}',[CategoryController::class,'show'])->name('site.produtos.category');

    Route::get('blog',[BlogController::class,'index'])->name('site.blog');

    Route::view('sobre','site.sobre.index')->name('site.sobre');

    Route::get('contato',[ContatoController::class,'index'])->name('site.contato');
    Route::post('contato',[ContatoController::class,'form'])->name('site.contato.form');



});