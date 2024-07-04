<?php

use App\Http\Controllers\NewsController;
use App\Http\Livewire\News\NewsCreate;
use App\Http\Livewire\News\NewsList;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('/news', NewsController::class);

Route::get('/news', NewsList::class)->name('news.list');
Route::get('/news/create', NewsCreate::class)->name('news.create');
Route::post('/news/store', NewsCreate::class)->name('news.store');
