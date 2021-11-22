<?php

use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\RecipeController;
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
Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signOut', [CustomAuthController::class, 'signOut'])->name('signOut');
Route::get('signOut', [CustomAuthController::class, 'signOut'])->name('signOut');
//Route::resource('recipes', 'App\Http\Controllers\RecipeController');
///Route::get('recipes', [RecipeController::class, 'index'])->
Route::get('recipes/create', [RecipeController::class, 'create'])->name('recipes.create');
Route::post('recipes/create', [RecipeController::class, 'store'])->name('recipes.store');
Route::get('recipes/list', [RecipeController::class, 'index'])->name('recipes.index');
Route::get('/', function () {
    return view('welcome');
});
