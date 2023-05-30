<?php

use App\Http\Controllers\Admin\ProductController;
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

// Route harus login terlebih dahulu, jika tidak login maka akan redirect ke /login
Route::middleware('auth')->group(function () {

    // Route admin
    Route::prefix('admin')->name('admin.')->middleware(['auth' => 'role:admin'])->group(function () {
        Route::get('', function () {
            return view('pages.admin.dashboard.index');
        })->name('dashboard');

        Route::get('components', function () {
            return view('pages.admin.components.index');
        })->name('components');

        Route::get('products', function () {
            return view('pages.admin.products.index');
        })->name('products');
        Route::resource('ajax/products', ProductController::class);
    });

    // route user
    Route::get('user', function () {
        return 'hi user';
    })->middleware('role:user')->name('user.dashboard');


    // route redirect-user jika admin maka ke route admin dan jika user maka ke route user
    Route::get('redirect-user', [LoginController::class, 'redirectUser'])->middleware('role:admin,user');
});

// Auth routes
Auth::routes();

Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
