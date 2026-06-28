<?php

use App\Http\Controllers\CatalogTypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/catalogs', function () {
    return view('pages.catalogs.catalogList');
});

Route::get('/catalog-types', [CatalogTypeController::class, 'index']);
Route::get('/catalog-types/{id}', [CatalogTypeController::class, 'show']);
Route::put('/catalog-types/{id}', [CatalogTypeController::class, 'update']);
Route::delete('/catalog-types/{id}', [CatalogTypeController::class, 'delete']);
Route::post('/catalog-types', [CatalogTypeController::class, 'store'])->name('catalog-types.store');
