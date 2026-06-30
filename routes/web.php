<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogTypeController;
use App\Http\Controllers\Library\AuthorController;
use App\Http\Controllers\Library\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('publicPage');
});



Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

Route::get('/catalogs', function () {
    return view('pages.catalogs.catalogList');
});

Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard', function () {
        return view('pages.dashboard');
    });

    /** LIBRARY */

    Route::get('/catalog-types', [CatalogTypeController::class, 'index']);
    Route::get('/catalog-types/{id}', [CatalogTypeController::class, 'show']);
    Route::put('/catalog-types/{id}', [CatalogTypeController::class, 'update']);
    Route::delete('/catalog-types/{id}', [CatalogTypeController::class, 'delete']);
    Route::post('/catalog-types', [CatalogTypeController::class, 'store'])->name('catalog-types.store');

    Route::prefix('/categories')->group(function(){
        Route::get('', [CategoryController::class, 'index']);
        Route::get('/{id}', [CategoryController::class, 'show']);
        Route::put('/{id}', [CategoryController::class, 'update']);
        Route::delete('/{id}', [CategoryController::class, 'delete']);
        Route::post('', [CategoryController::class, 'store'])->name('categories.store');
    });

    Route::prefix('/authors')->group(function(){
        Route::get('', [AuthorController::class, 'index']);
        Route::post('', [AuthorController::class, 'store'])->name('authors.store');
        Route::get('/{id}', [AuthorController::class, 'show']);
        Route::put('/{id}', [AuthorController::class, 'update']);
        Route::delete('/{id}', [AuthorController::class, 'delete']);
    });

});

