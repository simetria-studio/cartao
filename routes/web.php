<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\TesteApiController;
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



Route::any('teste-api', [TesteApiController::class, 'index'])->name('teste.api');
Route::get('delete-venda', [TesteApiController::class, 'exvluirVenda']);
Route::get('teste-data', [TesteApiController::class, 'testeData']);
Route::any('client-insert', [TesteApiController::class, 'insertClient'])->name('client.insert');

Route::get('/', [FrontController::class, 'index'])->name('index');


Route::get('admin', function(){

    return view('layouts.painel');
});
