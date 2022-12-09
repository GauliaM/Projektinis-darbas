<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;

Route::get('/',[Home::class, 'index'])->name('home.index');
Route::get('/search',[Home::class,'search'])->name('home.search');
Route::get('/{page}/page',[Home::class,'page'])->name('home.page');

Route::post('/upload', [UploadController::class, 'store']);

Route::middleware(['auth', 'role:user'])->name('user.')->prefix('user')->group(function () {
    Route::get('/', [IndexController::class, 'index'])->name('index');
    Route::resource('/categories', CategoriesController::class);
    Route::resource('/products', ProductsController::class);
    Route::get('/products/search', [ProductsController::class, 'search'])->name('products.search');
});

require __DIR__ . '/auth.php';
