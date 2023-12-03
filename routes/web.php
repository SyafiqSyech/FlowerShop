<?php

use App\Http\Controllers\HerbsController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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

// ROUTING PAGE BASIC
// MAIN PAGES
Route::get('/', function () {
    return view('main.landing-page');
});

route::get('/home', function () {
    return view('main.landing-page');
})->name('home');

Route::get('/contact', function () {
    return view('main.contact');
})->name('contact');

Route::get('/account', function () {
    return view('main.account');
})->middleware('auth')->name('account');

Route::get('/herbs', function () {
    return view('herbs.herbs');
})->name('herbs');

Route::get('/cart', function () {
    return view('main.cart');
})->middleware('auth')->name('cart');

// ACCOUNT RELATED PAGES
Route::get('/login', function () {
    return view('auth.login');
})->middleware('guest')->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->middleware('guest')->name('register');

// COLLECTION PAGES
Route::get('/alchemical', function () {
    return view('herbs.alchemical');
})->name('alchemical');
Route::get('/exotic', function () {
    return view('herbs.exotic');
})->name('exotic');
Route::get('/swiftgrow', function () {
    return view('herbs.swiftgrow');
})->name('swiftgrow');

// ===================================================================
//ROUTING LOGIC
// FORGOT PASSWORD
Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->middleware('guest')->name('forgot-password');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email:dns']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate(
        [
            'token' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|min: 6|max: 255',
            'confirm-password' => 'required|same:password'
        ],
        [
            'password.required' => 'Please enter a password.',
            'password.min' => 'Password minimum is 6 characters.',
            'password.max' => 'Password must not exceed 255 characters.',

            'confirm-password.required' => 'Please confirm you password.',
            'confirm-password.same' => 'Confirm password does not match with password.'
        ]
    );

    $status = Password::reset(
        $request->only('email', 'password', 'confirm-password', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

// LOGIN-REGISTER
Route::get('/register', [RegisterController::class, 'register'])->middleware('guest')->name('register');
Route::post('/storeUser', [RegisterController::class, 'storeUser'])->name('storeUser');
Route::get('/login', [LoginController::class, 'login'])->middleware('guest')->name('login');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth')->name('logout');

//HERBS
Route::get('/herbs', [HerbsController::class, 'showHerbsList'])->name('herbs');
Route::get('/show/{id}', [HerbsController::class, 'showHerbsDetail'])->name('show');