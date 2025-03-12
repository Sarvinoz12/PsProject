<?php

use App\Http\Controllers\PageController;
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

Route::get('/index', [PageController::class, 'index'])->name('index.page');
Route::get('/about', [PageController::class, 'about'])->name('about.page');
Route::get('/blog', [PageController::class, 'blog'])->name('blog.page');
Route::get('/cantact', [PageController::class, 'cantact'])->name('cantact.page');
Route::get('/furn', [PageController::class, 'furn'])->name('furn.page');