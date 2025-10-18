<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');
Route::get('/catalog/show/{id}', [CatalogController::class, 'show']);
Route::get('/catalog/edit/{id}', [CatalogController::class, 'edit']);
Route::get('/catalog/create', [CatalogController::class, 'create'])->name('catalog.create');
Route::post('/catalog/new', [CatalogController::class, 'new'])->name('catalog.new');



Route::get('/login', function(){
    return view('login');
});
 
Route::get('/logout', function(){
    return view('login');
});