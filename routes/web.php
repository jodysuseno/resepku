<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
Route::get('/', [RecipeController::class, 'index'])->middleware(['auth'])->name('index');
Route::get('/recipe/create', [RecipeController::class, 'create'])->middleware(['auth'])->name('recipe.create');
Route::post('/recipe/store', [RecipeController::class, 'store'])->middleware(['auth'])->name('recipe.store');
Route::get('/recipe/show/{id}', [RecipeController::class, 'show'])->middleware(['auth'])->name('recipe.show');
Route::post('/like/{id}', [RecipeController::class, 'like'])->middleware(['auth'])->name('like');
// Route::resource('/supplier', RecipeController::class);

require __DIR__.'/auth.php';
