<?php

use App\Http\Controllers\ProductController;
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
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Route::get('/product', function () {
//     return "<p>THis is product page</p>";
// });

// Route::get('/product', function () {
//     return "<p>THis is product page</p>";
// })->name('product');

Route::get('/product', [ProductController::class,'index'])->name('product.index');
Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
Route::post('/product/store', [ProductController::class,'store'])->name('product.store');

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
