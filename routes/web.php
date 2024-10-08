<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::Class, 'MainPage'])->name('main-page');

Route::get('/home', [MainController::Class, 'MainPage'])->name('main-page');

Route::get('/menu', [MainController::Class, 'MenuPage'])->name('menu-page');

Route::get('/movimento', [MainController::Class, 'MovimentoPage'])->name('movimento-page');

Route::get('/candidatos', [MainController::Class, 'CandidatosPage'])->name('candidatos-page');