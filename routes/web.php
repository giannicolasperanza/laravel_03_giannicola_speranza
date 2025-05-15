<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\ArticleController;

Route::get('/', function () {
    return view('welcome');
});


// Homepage
Route::get('/homepage' , [GeneralController::class, 'homepage'])->name('homepage');

// Indice con tutti gli Articoli 
Route::get('/articles',[ArticleController::class, 'articles'])->name('listArticles');

// Dettaglio articolo 
Route::get('/articleDetail/{id}', [ArticleController::class, 'dettaglio'])->name('articleDetail');