<?php

use App\Http\Controllers\AtelierController;
use App\Http\Controllers\IngredientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IngredientController::class, 'index'])->name('home');
Route::get('/atelier', [AtelierController::class, 'atelier'])->name('atelier');

Route::post('/', [AtelierController::class, 'store']);
Route::delete('/ingredient/{id}/delete', [AtelierController::class, 'destroy']);
Route::get('/ingredient/{id}/show', [AtelierController::class, 'show']);