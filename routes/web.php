<?php

use App\Http\Controllers\admin\DivisionController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\ManagerController;
use App\Http\Controllers\admin\PositionController;
use App\Http\Controllers\admin\ReportController;
use App\Http\Controllers\admin\RequestController;
use App\Http\Controllers\admin\SkillController;
use App\Http\Controllers\admin\UserController;
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


Route::group(['prefix' => 'admin','middleware' => 'check.login'], function () {
    Route::get('/dashboards', function () {
        return view('admin.home');
    });
    Route::resource('users', UserController::class);
    Route::resource('managers', ManagerController::class);
    Route::resource('reports', ReportController::class);
    Route::get('waiting', [RequestController::class, 'getWaitingRequest']);
    Route::get('approve/{id}', [RequestController::class, 'approveWRequest']);
    Route::get('deny/{id}', [RequestController::class, 'denyWRequest']);
    Route::resource('requests', RequestController::class);
    Route::resource('divisions', DivisionController::class);
    Route::resource('positions', PositionController::class);
    Route::resource('skills', SkillController::class);
});

##### LOGIN-LOGOUT #############
Route::get('login', [LoginController::class, 'formLogin'])->name('admin.login');
Route::post('login', [LoginController::class, 'loginAdmin']);
Route::post('logout', [LoginController::class, 'logout'])->name('admin.logout');



###################
# client
###################
