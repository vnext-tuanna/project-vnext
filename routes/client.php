<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginFormController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\Auth\AuthenticateController;

Route::get('/', function () {
    return view('client.login');
});
Route::get('/client/user', function () {
    return view('client.user.index');
});
Route::get('/client/profile', function () {
    return view('client.user.profile');
});

Route::get('/request', function () {
    return view('client.request.index');
});
Route::get('/request/add', function () {
    return view('client.request.add');
})->name('request.add');

Route::get('auth/{driver}', [AuthenticateController::class, 'loginSocialPlatform'])->name('auth');
Route::get('auth/{driver}/callback', [AuthenticateController::class, 'callbackFromPlatform']);
Route::get('/', [LoginFormController::class, 'loginForm'])->name('login');
Route::post('/', [LoginFormController::class, 'login']);
Route::get('logout', [LogoutController::class, 'logout'])->name('logout');
Route::middleware('auth')->group(function () {
    Route::get('/homepage', function () {
        return view('client.index');
    })->name('index');
    Route::resource('report', ReportController::class);
});
