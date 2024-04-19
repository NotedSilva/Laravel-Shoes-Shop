<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// Route::get('/detalhes', function () {
//     return view('Detalhes');
// });

Route::get('/', [ProductController::class, 'listarprodutos'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/product-list', [ProductController::class, 'listaProdutosPorNome'])->name('product.list');
    Route::get('/detalhes/{id}', [ProductController::class, 'DetalhesProdutos'])->name('product.details');

    Route::get('/product', [ProductController::class, 'index'])->name('product.view');
    Route::post('/product', [ProductController::class, 'store'])->name('product.create');

    Route::get('/product-edit/{id}', [ProductController::class,'edit'])->name('product.edit');
    Route::put('/product-update/{id}', [ProductController::class,'update'])->name('product.update');

    Route::delete('/product-destroy/{id}', [ProductController::class,'destroy'])->name('product.destroy');
});

require __DIR__.'/auth.php';
