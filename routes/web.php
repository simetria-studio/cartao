<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('teste-api', [TesteApiController::class, 'index']);
Route::get('delete-venda', [TesteApiController::class, 'exvluirVenda']);
Route::get('teste-data', [TesteApiController::class, 'testeData']);
Route::get('client-insert', [TesteApiController::class, 'insertClient']);
