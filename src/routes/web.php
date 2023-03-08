<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;

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
// 未ログイン
Route::group(['middleware' => ['guest:admin']], function () {

    // ログイン画面
    Route::get('login', [AuthController::class, 'index'])->name('login.index');

    // ログイン
    Route::post('login', [AuthController::class, 'login'])->name('login.login');
});

// ログイン済み
Route::group(['middleware' => ['auth:admin']], function () {

    // ダッシュボード
    Route::get('/', [DashboardController::class, 'index'])->name('index');
    // オペレータ
    Route::resource('operators', OperatorController::class);

    // ログアウト
    Route::get('logout', [AuthController::class, 'logout'])->name('login.logout');
});