<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;

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

Route::get('/', [App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre_nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function(){ return 'Login';})->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){ return 'Login';})->name('app.clientes');
    Route::get('/fornecedores', function(){ return 'Login';})->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Login';})->name('app.produtos');
});

Route::fallback(function() {
    echo 'Página não encontrada. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial.';
});

Route::get('/teste/{p1}/{p2}', [App\Http\Controllers\TesteController::class, 'teste']);

//Route::get($uri, $callback);
/*
verbo http:

get
post
put
patch
delete
options
*/