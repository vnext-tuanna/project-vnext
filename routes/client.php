<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginFormController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\Auth\AuthenticateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\RequestController;

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
    Route::resource('user', UserController::class);
    Route::get('change/{id}', [ChangePasswordController::class, 'change'])->name('changePassword.edit');
    Route::post('change/{id}', [ChangePasswordController::class, 'changePassword']);
    Route::prefix('request')->group(function () {
        Route::get('/', [RequestController::class, 'index'])->name('request');
        Route::get('add', [RequestController::class, 'create'])->name('request.add');
        Route::post('add', [RequestController::class, 'store']);
        Route::get('/request-by-week', [RequestController::class, 'getRequestByWeek'])->name('request.week');
        Route::get('/request-by-month/{month}', [RequestController::class, 'getRequestByMonth'])->name('request.month');
    });
});
