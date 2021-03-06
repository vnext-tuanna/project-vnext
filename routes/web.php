<?php

use App\Http\Controllers\admin\DivisionController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\ManagerController;
use App\Http\Controllers\admin\PositionController;
use App\Http\Controllers\admin\ReportController;
use App\Http\Controllers\admin\RequestController;
use App\Http\Controllers\admin\SkillController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\SendMailController;
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

###################
# GUEST
###################


Route::group(['prefix' => 'admin', 'middleware' => 'check.login'], function () {
    Route::get('dashboards', [DashboardController::class, 'getSum']);
    Route::resource('users', UserController::class);
    Route::resource('managers', ManagerController::class);
    Route::resource('reports', ReportController::class);
    Route::post('report-by-date', [ReportController::class, 'reportByDate'])->name('reportByDate');
    Route::get('/report-by-week', [ReportController::class, 'reportByWeek'])->name('reportbyWeek');
    Route::get('/report-by-month/{month}', [ReportController::class, 'reportByMonth'])->name('reportByMonth');
    Route::get('waiting', [RequestController::class, 'getWaitingRequest']);
    Route::get('approve/{id}', [RequestController::class, 'approveWRequest']);
    Route::get('deny/{id}', [RequestController::class, 'denyWRequest']);
    Route::resource('requests', RequestController::class);
    Route::post('request-by-date', [RequestController::class, 'requestByDate'])->name('requestByDate');
    Route::get('/request-by-month/{month}', [RequestController::class, 'requestByMonth'])->name('requestByMonth');
    Route::resource('divisions', DivisionController::class);
    Route::resource('positions', PositionController::class);
    Route::resource('skills', SkillController::class);
    Route::get('send-mail', [SendMailController::class, 'create']);
    Route::post('send-mail', [SendMailController::class, 'store']);
});

##### LOGIN-LOGOUT #############
Route::get('login', [LoginController::class, 'formLogin'])->name('admin.login');
Route::post('login', [LoginController::class, 'loginAdmin']);
Route::get('admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

###################
# client
###################
