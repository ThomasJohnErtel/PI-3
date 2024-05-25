<?php
 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CarrinhoController;
 
Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/categoria',[CategoriaController::class, 'index'])->name('categoria.index');
Route::get('/carrinho', [CarrinhoController::class, 'index'])->name('carrinho.index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';