<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// JOBSHEET 2 - PRAK 1

// BASIC ROUTING
// Nomor 2
// Route::get('/hello', function () {
//     return 'Hello World';
// });

// Nomor 4
// Route::get('/world', function () {
//     return 'World';
// });

// Nomor 6
// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Nomor 7
// Route::get('/about', function () {
//     return '2241760081 - AMANDA JASMYNE BERLIANA PUTRI';
// });

// ROUTE PARAMETERS
// Nomor 8
// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya ' .$name;
// });


// Nomor 11
// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Pos ke-' .$postId." Komentar ke: ".$commentId;
// });


// Nomor 13
// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID ' .$id;
// });

// OPTIONAL PARAMETERS
// Nomor 14
// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya ' .$name;
// });

// Nomor 17
// Route::get('/user/{name?}', function ($name='John') {
//     return 'Nama saya ' .$name;
// });

// JOBSHEET 2 - PRAK 2

// Nomor 4
// Route::get('/hello', [WelcomeController::class,'hello']);

// Nomor 6
// Route::get('/', [PageController::class, 'index']);
// Route::get('/about', [PageController::class, 'about']);
// Route::get('/articles/{id}', [PageController::class, 'articles']);

// Nomor 7
// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'about']);
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// // Nomor 9
// Route::resource('photos', PhotoController::class);

// // Nomor 11
// Route::resource('photos', PhotoController::class) ->only(['index','show']);
// Route::resource('photos', PhotoController::class) ->except(['create','store', 'update', 'destroy']);

// JOBSHEET 2 - PRAK 3

// Nomor 2
// Route::get('/greeting', function() {
//     return view('hello', ['name' => 'Amanda Jasmyne']);
// });

// Nomor 6
// Route::get('/greeting', function() {
//     return view('blog.hello', ['name' => 'Amanda Jasmyne']);
// });

// Nomor 9
Route::get('/greeting', [WelcomeController::class, 'greeting']);

// JOBSHEET 2 - TUGAS
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/user', [UserController::class, 'user'])->name('user');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/food-beverage', [CategoryController::class, 'foodBeverage'])->name('category.food-beverage');
Route::get('/beauty-health', [CategoryController::class, 'beautyHealth'])->name('category.beauty-health');
Route::get('/home-care', [CategoryController::class, 'homeCare'])->name('category.home-care');
Route::get('/baby-kid', [CategoryController::class, 'babyKid'])->name('category.baby-kid');
Route::get('/transact', [TransactController::class, 'transact'])->name('transact');