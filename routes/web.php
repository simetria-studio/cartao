<?php

use App\Http\Controllers\Auth\CustomAuthController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\InfluencerController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\SplitController;
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

Route::get('admin-login', [CustomAuthController::class, 'index'])->name('admin.login');
Route::post('admin-login-post', [CustomAuthController::class, 'login'])->name('admin.login.post');
Route::any('admin-logout', [CustomAuthController::class, 'logout'])->name('admin.logout');

Route::any('teste-api', [TesteApiController::class, 'index'])->name('teste.api');
Route::get('delete-venda', [TesteApiController::class, 'exvluirVenda']);
Route::get('teste-data', [TesteApiController::class, 'testeData']);
Route::any('client-insert', [TesteApiController::class, 'insertClient'])->name('client.insert');

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/club-de-beneficios', [FrontController::class, 'club'])->name('club');
Route::get('/influencer/carlinhos-maia', [FrontController::class, 'influencer'])->name('influencer');


Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/', [PainelController::class, 'index'])->name('admin.index');
    Route::get('pedidos', [PainelController::class, 'pedidos'])->name('admin.pedidos');
    Route::get('filter-by-id', [PainelController::class, 'filterId']);
    Route::get('filter-by-status', [PainelController::class, 'filterStatus']);

    Route::get('influencers', [InfluencerController::class, 'index'])->name('influencers');
    Route::post('influencers-store', [InfluencerController::class, 'store'])->name('influencers.store');
    Route::get('busca-cep', [InfluencerController::class, 'buscaCep']);

    Route::get('clientes', [ClientesController::class, 'index'])->name('clientes');

    Route::get('split-store', [SplitController::class, 'store']);
    Route::get('splits', [SplitController::class, 'index'])->name('splits');
    Route::post('split-payment', [SplitController::class, 'payment'])->name('split.payment');

    Route::get('delete-venda', [PainelController::class, 'deleteVenda']);

    Route::get('filter-by-id-clientes', [ClientesController::class, 'filterId']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
