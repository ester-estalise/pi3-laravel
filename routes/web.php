<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CarrinhoController;
use App\HttP\Controllers\PedidoController;
use App\Http\Controllers\EnderecoController;

Route::get('/', [ProdutoController::class,'index']);

Route::get('/endereco' , [EnderecoController::class, 'index'])->name('endereco.index');
Route::post('/endereco' , [EnderecoController::class, 'save'])->name('endereco.save');


Route::post('/carrinho/{produto}',[CarrinhoController::class, 'store'])->name('carrinho.store');
Route::get('/carrinho',[CarrinhoController::class,'index'])->name('carrinho.index');

Route::get('/dashboard', function () {
    return redirect('/produto');
    //so vai entrar nesse dashboard quem estiver autenticado e verificado entram
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/produto', function () {
    return view('welcome');
});
Route::get('/produtos', function () {
    return view('produto.produtos');
});



Route::get('/produto',[ProdutoController::class,'index']);
Route::get('/produto/{produto}' ,  [ProdutoController::class,'show']);
require __DIR__.'/auth.php';


Route::post('/pedido',[PedidoController::class,'checkout'])->name('pedido.checkout');
Route::get('/pedido',[PedidoController::class,'index'])->name('pedido.index');
Route::get('/pedido/{pedido}',[PedidoController::class,'show'])->name('pedido.show');
