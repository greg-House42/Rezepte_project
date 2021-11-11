<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\DB;
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
Route::resource('recipes', 'App\Http\Controllers\RecipeController');
Route::get('recipes/create', function () {

    $recipes = DB::table('recipes')->get();

    return view('recipes.create', ['output' => $recipes]);
});
Route::get('/', function () {
    return view('welcome');
});
