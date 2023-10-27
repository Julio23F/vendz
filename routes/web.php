<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class,'index'])->name('article.index');
Route::get('/create', [HomeController::class,'create'])->name('article.create');
Route::post('/create', [HomeController::class,'store']);
Route::get('/message', [HomeController::class,'message'])->name('article.message');

Route::get('/admin', [HomeController::class,'admin'])->name('article.admin');
Route::post('/admin', [HomeController::class,'addcategorie']);

Route::get('/{categorie}',[HomeController::class,'listecategorie'])->name('article.categorie');
