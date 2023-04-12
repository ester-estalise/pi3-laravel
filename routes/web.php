<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CarrinhoController;




Route::get('/', [ProdutoController::class,'index']);

Route::get('/carrinho/{produto}',[CarrinhoController::class, 'store'])->name('carrinho.store');
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



Route::get('/produto',[ProdutoController::class,'index']);
Route::get('/produto/{produto}' ,  [ProdutoController::class,'show']);
require __DIR__.'/auth.php';
