<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookUserController;
use App\Http\Controllers\BookAdminController;
use App\Http\Controllers\showingcontroller;
use App\Http\Controllers\UserBooksController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UsedBooksController;
use App\Http\Controllers\UserAddToCartControoler;
use App\Http\Controllers\OtherProfileController;
use App\Http\Controllers\AddCommentController;
use App\Http\Controllers\CartController;










use App\Http\Controllers\BookDetailsController;
use App\Http\Controllers\AddToCartControoler;






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
Route::resource('users', UserController::class);
Route::resource('categories', CategoryController::class);
Route::resource('books', BookController::class);
Route::resource('booksuser', BookUserController::class);

Route::resource('booksadmin', BookAdminController::class);
Route::resource('userbooks', UserBooksController::class);
Route::resource('profile12', ProfileController::class);
Route::resource('usedbooks', UsedBooksController::class);
Route::resource('otherprofile', OtherProfileController::class);
Route::resource('addcomment', AddCommentController::class);
Route::resource('cart', CartController::class);





Route::get('/userbooksdetails', [UsedBooksController::class, 'show']);
Route::get('/booksdetails', [BookDetailsController::class, 'show']);

Route::get('/showbook', [BookAdminController::class, 'show']);
Route::get('/editbook', [BookAdminController::class, 'edit']);


Route::post('addtocart', [AddToCartControoler::class, 'storeStepOne'])->name('addtocart');
Route::post('useraddtocart', [UserAddToCartControoler::class, 'storeStepOne'])->name('useraddtocart');



Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('index');
});
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/adminusers', function () {
    return view('admin.users.index');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/adminbooks', function () {
    return view('admin.books.details');
});
Route::get('/profile', function () {
    return view('pages.profile.profile');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/shop', function () {
    return view('pages.shop');
});

require __DIR__.'/auth.php';
