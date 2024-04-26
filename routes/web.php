<?php

use App\Http\Controllers\AdmimController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


// Route::get('/detalhes', function () {
//     return view('Detalhes');
// });

// Route::get('/', [ProductController::class, 'listarprodutos'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'userMiddleware'])->group(function() {
    Route::get('/', [UserController::class, 'listarprodutos'])->name('dashboard');
});


Route::middleware(['auth', 'adminMiddleware'])->group(function() {
    Route::get('/admin/dashboard', [AdmimController::class, 'listarprodutos'])->name('admin.dashboard');

    Route::get('/admin/product-list', [ProductController::class, 'listaProdutosPorNome'])->name('product.list');
    Route::get('/admin/detalhes/{id}', [ProductController::class, 'DetalhesProdutos'])->name('product.details');

    Route::get('/admin/product', [ProductController::class, 'index'])->name('product.view');
    Route::post('/admin/product', [ProductController::class, 'store'])->name('product.create');

    Route::get('/admin/product-edit/{id}', [ProductController::class,'edit'])->name('product.edit');
    Route::put('/admin/product-update/{id}', [ProductController::class,'update'])->name('product.update');

    Route::delete('/admin/product-destroy/{id}', [ProductController::class,'destroy'])->name('product.destroy');
});

require __DIR__.'/auth.php';
