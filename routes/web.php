<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
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

// ROUTING PAGE
Route::get('/', function () {
    return view('welcome');
});

// MAIN PAGES
route::get('/home', function () {
    return view('home');
}) -> name('home');

Route::get('/contact', function () {
    return view('contact');
}) -> name('contact');

Route::get('/account', function() {
    return view('account');
}) -> name('account');

Route::get('/herbs', function () {
    return view('herbs');
}) -> name('herbs');

Route::get('/cart', function () {
    return view('cart');
}) -> name('cart');

// ACCOUNT RELATED PAGES
Route::get('/login', function () {
    return view('login');
}) -> name('login');

Route::get('/register', function () {
    return view('register');
}) -> name('register');


// COLLECTION PAGES
Route::get('/alchemical', function () {
    return view('alchemical');
}) -> name('alchemical');

Route::get('/exotic', function () {
    return view('exotic');
}) -> name('exotic');

Route::get('/swiftgrow', function () {
    return view('swiftgrow');
}) -> name('swiftgrow');


// ROUTING LOGIC
Route::get('/register', [RegisterController::class, 'register']) -> name('register');
Route::post('/storeUser', [RegisterController::class, 'storeUser']) -> name('storeUser');
Route::get('/login', [LoginController::class, 'login']) -> name('login');
Route::post('/authenticate', [LoginController::class,'authenticate']) -> name('authenticate');