<?php

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

Auth::routes();

// Route::livewire('users/table', 'users.table')->layout('layouts.app');
Route::get('users/table', \App\Http\Livewire\Users\Table::class);
Route::get('products', \App\Http\Livewire\Products\Index::class);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
