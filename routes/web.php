<?php

use App\Http\Controllers\AdminPageCantroller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PsPageCantroller;
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



Route::get('/', [PageController::class, 'index'])->name('index.page');
Route::get('/about', [PageController::class, 'about'])->name('about.page');
Route::get('/blog', [PageController::class, 'blog'])->name('blog.page');
Route::get('/cantact', [PageController::class, 'cantact'])->name('cantact.page');
Route::get('/furn', [PageController::class, 'furn'])->name('furn.page');

Route::get('/admin/dashbord',[AdminPageCantroller::class,'dashbord'])->name('admin.dashbord');
Route::get('/admin/create', [AdminPageCantroller::class, 'create'])->name('admin.create');
Route::post('/admin/store', [AdminPageCantroller::class, 'store'])->name('admin.store');
Route::get('/admin/index', [AdminPageCantroller::class, 'index'])->name('admin.index');
Route::get('/admin/edit/{id}', [AdminPageCantroller::class, 'edit'])->name('admin.edit');
Route::put('/admin/{psixolog}/update', [AdminPageCantroller::class, 'update'])->name('admin.update');
Route::delete('/admin/{psixolog}/delete', [AdminPageCantroller::class, 'destroy'])->name('admin.destroy');

Route::get('/ps/main', [PsPageCantroller::class, 'main'])->name('ps.main');
Route::get('/ps/all/furn', [PsPageCantroller::class, 'allfurn'])->name('ps.allfurn');
Route::get('/ps/add/furn', [PsPageCantroller::class, 'addfurn'])->name('ps.addfurn');
