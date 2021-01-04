<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
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

Route::get('/', [studentController::class, 'index'])->name('home');
Route::get('/add', [studentController::class, 'add'])->name('Add New');
Route::post('/add', [studentController::class, 'store'])->name('store');
Route::get('/edit/{id}', [studentController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [studentController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [studentController::class, 'delete'])->name('delete');
