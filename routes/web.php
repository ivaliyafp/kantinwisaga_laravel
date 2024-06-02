<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MenuItemController;
use App\Http\Controllers\NavbarController;
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

// Route::get('/', [NavbarController::class, 'index']);


Route::resource('menuitems', MenuItemController::class);
Route::get('/menu', [MenuItemController::class, 'index'])->name('menu.index');
Route::get('/menu', [MenuItemController::class, 'menu'])->name('menu');
Route::get('/halaman/utama', [NavbarController::class, 'index']);
Route::resource('cart', CartController::class)->except(['create', 'show', 'edit', 'update']);


