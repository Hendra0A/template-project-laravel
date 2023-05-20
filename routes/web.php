<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
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

Route::redirect('/', '/login');

Route::get('/admin', function () {
    return view('pages.admin.dashboard.index');
})->middleware('role:admin')->name('admin.dashboard');

Route::get('/user', function () {
    return 'hi user';
})->middleware('role:user')->name('user.dashboard');

// redirect user
Route::get('/redirect-user', [LoginController::class, 'redirectUser'])->middleware('role:admin,user');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
