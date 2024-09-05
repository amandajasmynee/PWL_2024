<?php

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

// BASIC ROUTING
// Nomor 2
Route::get('/hello', function () {
    return 'Hello World';
});

// Nomor 4
Route::get('/world', function () {
    return 'World';
});

// Nomor 6
Route::get('/', function () {
    return 'Selamat Datang';
});

// Nomor 7
Route::get('/about', function () {
    return '2241760081 - AMANDA JASMYNE BERLIANA PUTRI';
});

// ROUTE PARAMETERS
// Nomor 8
Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' .$name;
});


// Nomor 11
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-' .$postId." Komentar ke: ".$commentId;
});


// Nomor 13
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' .$id;
});

// OPTIONAL PARAMETERS
// Nomor 14
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya ' .$name;
});

// Nomor 17
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya ' .$name;
});