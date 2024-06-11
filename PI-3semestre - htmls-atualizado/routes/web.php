<?php
 
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ListaController;




Route::post('/carrinho/adicionar', [CarrinhoController::class, 'adicionar'])->name('carrinho.adicionar');
Route::post('/carrinho/remover', [CarrinhoController::class, 'remover'])->name('carrinho.remover');
Route::get('/carrinho', [CarrinhoController::class, 'mostrar'])->name('carrinho.mostrar');

// Rotas para outras funcionalidades
Route::get('/lista', [ListaController::class, 'index'])->name('lista.index');
Route::get('/produto/{produto}', [ListaController::class, 'show'])->name('lista.show');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/categoria',[CategoriaController::class, 'index'])->name('categoria.index');

// Rotas padrão do Laravel
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
