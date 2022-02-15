<?php

<<<<<<< HEAD
use App\Http\Controllers\GrupyController;
=======
use App\Http\Controllers\CartController;
>>>>>>> 97ffa71c722fdbef065bddb9fc71dc28347507a0
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [WelcomeController::class, 'index']);

Route::middleware(['auth', 'verified'])->group(function() {
    Route::middleware(['can:isAdmin'])->group(function() {
        Route::get('/products/{product}/download', [ProductController::class, 'downloadImage'])->name('products.downloadImage');
        Route::resource('products', ProductController::class);

        Route::resource('users', UserController::class)->only([
            'index', 'edit', 'update', 'destroy'
        ]);
    });
<<<<<<< HEAD

    Route::middleware(['can:isGrupa1'])->group(function() {
        Route::get('/grupy', [GrupyController::class, 'index']);
         Route::get('/grupy/lista', [App\Http\Controllers\GrupyController::class, 'index']);
        // Route::get('/grupy', [App\Http\Controllers\GrupyController::class, 'grupy.grupa1']);

     });


        Route::get('/cart/list', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
        Route::post('/cart/{product}', [App\Http\Controllers\CartController::class, 'store'])->name('cart.store');
        Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

=======
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/{product}', [CartController::class, 'store'])->name('cart.store');
    Route::delete('/cart/{product}', [CartController::class, 'destroy'])->name('cart.destroy');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 97ffa71c722fdbef065bddb9fc71dc28347507a0
});

Route::get('/hello', [HelloWorldController::class, 'show']);


Auth::routes(['verify' => true]);
