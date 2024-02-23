<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AssocierControlleurs;

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

Route::get('/', [WelcomeController::class, 'index'])
    ->name('welcome');
Route::get('/about', [WelcomeController::class, 'about'])
    ->name('about');
Route::get('/associer',  [AssocierControlleurs::class, 'index']);
Route::get('/associer-creer',  [AssocierControlleurs::class, 'create']);
Route::post('/associer-creer-2',  [AssocierControlleurs::class, 'store']);
Route::get('/associer-show',  [AssocierControlleurs::class, 'show']);
Route::get('/associer-detruite',  [AssocierControlleurs::class, 'delete']);
