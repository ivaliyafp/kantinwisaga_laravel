<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MenuItemController;
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
    return redirect()->route('items.index');
});

Route::resource('items', ItemController::class);
Route::get('/items/{item}', [ItemController::class, 'show'])->name('items.show');
Route::resource('menu-items', MenuItemController::class);
Route::get('/menu', [MenuItemController::class, 'index'])->name('menu');
Route::get('/Home', [MenuItemController::class, 'menu'])->name('Home');

