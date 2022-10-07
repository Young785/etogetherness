<?php

use App\Models\User;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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
    Auth::logout();
    return redirect('/');
    User::where("id", Auth::user()->id)->update(["online_status" => "0", "last_seen" => now()]);
});

Route::post('/password/send_reset_link', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('sendResetLinkEmail');

Auth::routes();
Route::prefix("/user")->middleware("auth")->group(function () {
    Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('index');
    Route::get('/search', [App\Http\Controllers\DashboardController::class, 'search'])->name('search');
    Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('profile');
    Route::get('/advance_search', [App\Http\Controllers\UserController::class, 'advSearch'])->name('advSearch');
    
    Route::get('/advance_search', [App\Http\Controllers\UserController::class, 'advSearch'])->name('advSearch');
    Route::get('/matches', [App\Http\Controllers\UserController::class, 'matches'])->name('matches');
    Route::get('/activities', [App\Http\Controllers\UserController::class, 'activities'])->name('activities');
    Route::get('/packages', [App\Http\Controllers\UserController::class, 'packages'])->name('packages');
    Route::get('/account-settings', [App\Http\Controllers\UserController::class, 'accountSettings'])->name('account.settings');
    Route::get('/advance_search', [App\Http\Controllers\UserController::class, 'advSearch'])->name('advSearch');

    Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
        $request->fulfill();
     
        return redirect('/home');
    })->middleware(['auth', 'signed'])->name('verification.verify');
    Route::get('/verify-account', [App\Http\Controllers\Auth\VerificationController::class, 'show'])->name('verify_email');
    Route::post('/resend/verify-account', [App\Http\Controllers\Auth\VerificationController::class, 'resend'])->name('resend.verify_email');
    Route::get('/messages', [App\Http\Controllers\MessageController::class, 'messages'])->name('messages');
    Route::get('/messages/get-images/{id}', [App\Http\Controllers\MessageController::class, 'getImage'])->name('getImage');
    Route::get('/messages/{id}', [App\Http\Controllers\MessageController::class, 'oneUserMessage'])->name('oneUserMessage');
    Route::get('/message/{id}', [App\Http\Controllers\MessageController::class, 'message_user'])->name('message_user');
    Route::post('/message/{id}', [App\Http\Controllers\MessageController::class, 'sendMessage'])->name('sendMessage');
});

Auth::routes();
Route::get('/advance_search', [App\Http\Controllers\UserController::class, 'advSearch'])->name('advSearch');

Route::get('/main', [App\Http\Controllers\HomeController::class, 'main'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/chat', [App\Http\Controllers\ChatsController::class, 'index']);
// Route::get('/messages', [App\Http\Controllers\ChatsController::class, 'fetchMessages']);
// Route::post('/messages', [App\Http\Controllers\ChatsController::class, 'sendMessage']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
