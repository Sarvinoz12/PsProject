<?php

use App\Http\Controllers\AdminPageCantroller;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PsixologController;
use App\Http\Controllers\PsPageCantroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//Route::get('/redirect-by-role', function () {
//    $user = auth()->user();
//
//    if (!$user || !$user->role) {
//        // Agar role yo‘q bo‘lsa logout qilib, login sahifaga qaytaramiz
//        Auth::logout();
//        return redirect()->route('login')->with('error', 'Sizga rol biriktirilmagan. Admin bilan bog‘laning.');
//    }
//
//    return match ($user->role->name) {
//        'admin' => redirect()->route('admin.dashbord'),
//        'psixolog' => redirect()->route('ps.main'),
//        default => redirect()->route('index.page'),
//    };
//});
Route::get('/', [PageController::class, 'index'])->name('index.page');
Route::get('/about', [PageController::class, 'about'])->name('about.page');
Route::get('/blog', [PageController::class, 'blog'])->name('blog.page');
Route::get('/price/frun',[PageController::class, 'services_price'])->name('price.page');
Route::get('/furn', [PageController::class, 'furn'])->name('furn.page');
Route::get('/xizmatlar', [PageController::class, 'search'])->name('services.search');
Route::get('/services/{id}/booking', [PageController::class, 'bookingForm'])->name('services.booking.form');
Route::post('/services/{id}/booking', [PageController::class, 'storeBooking'])->name('services.booking.store');

Route::middleware(['auth','role:admin'])->group(function () {

Route::get('/admin/dashboard', [AdminPageCantroller::class, 'dashboard'])->name('admin.dashbord');
Route::get('/admin/create', [AdminPageCantroller::class, 'create'])->name('admin.create');
Route::post('/admin/store', [AdminPageCantroller::class, 'store'])->name('admin.store');
Route::get('/admin/index', [AdminPageCantroller::class, 'index'])->name('admin.index');
Route::get('/admin/edit/{id}', [AdminPageCantroller::class, 'edit'])->name('admin.edit');
Route::put('/admin/{psixolog}/update', [AdminPageCantroller::class, 'update'])->name('admin.update');
Route::delete('/admin/{psixolog}/delete', [AdminPageCantroller::class, 'destroy'])->name('admin.destroy');

});

Route::middleware(['auth','role:Psixolog'])->group(function () {

Route::get('/ps/main', [PsixologController::class, 'dashbord'])->name('ps.main');
Route::get('/ps/all/furn', [PsixologController::class, 'index'])->name('ps.index');
Route::get('/ps/add/furn', [PsixologController::class, 'create'])->name('ps.create');
Route::post('/ps/store', [PsixologController::class, 'store'])->name('ps.store');
Route::get('/ps/edit/{id}', [PsixologController::class, 'edit'])->name('ps.edit');
Route::put('/ps/update/{id}', [PsixologController::class, 'update'])->name('ps.update');
Route::delete('/ps/delete/{id}', [PsixologController::class, 'destroy'])->name('ps.destroy');
Route::get('/ps/show/all/booking/user', [PsixologController::class, 'bookinguser'])->name('ps.bookingusers');
Route::post('/bookings/{id}/confirm', [PsixologController::class, 'confirm'])->name('bookings.confirm');
Route::delete('/bookings/{id}', [PsixologController::class, 'destroy_booking'])->name('bookings.destroy');

});



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
Route::post('/send/cantact',[PageController::class, 'sendcantact'])->name('sendcantact');
Route::get('/cantact', [PageController::class, 'cantact'])->name('cantact.page');
Route::delete('/admin/calling/delete/{id}', [AdminPageCantroller::class, 'deletecalling'])->name('admin.calling.destroy');
