<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
});

Route::get('/catalogs', function () {
    return view('pages.catalogs.catalogList');
});
