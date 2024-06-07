<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipesController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba', function () {
    return view('prueba');
});

Route::resource('recipes', RecipesController::class);
Route::get('/unpublish/recipes', [RecipesController::class, 'getUnpublishedRecipes'])->name('recipes.unpublish');
Route::get('/publish/recipes/{id}', [RecipesController::class, 'publishRecipe'])->name('recipes.publish');