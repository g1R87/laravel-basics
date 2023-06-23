<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

//email auth
Auth::routes(['verify' => true]);

Route::get('/', [ProductController::class, "index"]);

//create product
Route::get("/products/create", [ProductController::class, "create"])->middleware('auth');
//show manage page
Route::get("/products/manage", [ProductController::class, "manage"])->middleware('auth');

//show signle product
Route::get('/products/{product}', [ProductController::class, "show"]);

//store product in db
Route::post('/products', [ProductController::class, "store"])->middleware('auth');

//show edit page
Route::get('/products/{product}/edit', [ProductController::class, "edit"])->middleware('auth');
//update product
Route::put('/products/{product}', [ProductController::class, "update"])->middleware('auth');

//delete prodduct
Route::delete('products/{product}', [ProductController::class, 'destroy'])->middleware('auth');

//-------------------------Users section ------------------------//

Route::get('/signup', [UserController::class, "create"])->middleware('guest');

Route::get('/verify', function () {
    return view('auth.verify');
});

//create user
Route::post('/users', [UserController::class, "store"])->name('register');

//logout
Route::post("/logout", [UserController::class, "logout"])->middleware('auth');

//show llogin page
Route::get('/signin', [UserController::class, "login"])->name('login')->middleware('guest');

//log user in
Route::post("users/authenticate", [UserController::class, 'authenticate']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
