<?php

use App\Models\User;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/logout', function () {
    User::where("id", auth()->user()->id)->update(["online_status" => "0", "last_seen" => now()]);
    Auth::logout();
    return redirect('/');
});

Route::post('/password/send_reset_link', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('sendResetLinkEmail');

Auth::routes();

Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('index')->middleware("auth");
Route::get('/users/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile')->middleware("auth");

Auth::routes();

Route::get('/main', [App\Http\Controllers\HomeController::class, 'main'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');