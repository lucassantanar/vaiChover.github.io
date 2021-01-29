<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\TesteController;
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

//  Route::get('/', function () {
//      return view('index');
//  });



Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/teste', [TesteController::class, 'index']); //Funciona!!!
Route::get('/', [ReturnController::class, 'retornaValorIndex']);

Route::match(['get', 'post'], '/{nomeCidade}', [ReturnController::class, 'retornaValorIndex'])
        ->name('nameCity'); 
        



