<?php

use App\Livewire\Counter;
use App\Livewire\Home;
use App\Livewire\LazyLoading;
use Illuminate\Support\Facades\Route;

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

Route::get('/', Home::class)->name('home');
Route::get('/counter', Counter::class)->name('counter');
Route::get('/lazy-loading', LazyLoading::class)->name('lazy-loading');
