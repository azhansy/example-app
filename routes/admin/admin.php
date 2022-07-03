<?php

use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

// 后台路由
//Route::prefix('admin')->group(function () {
//    Route::get('/login', function () {
//        // Matches The "/admin/login" URL
////        Route::get('login', 'LoginController@index') -> name('admin.login');
//        Route::get('/dddd', 'index');
//    });
//});
// 路由分组
//Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
//    // 登录显示
//    Route::get('login', 'LoginController@index') -> name('admin.login');
//    // 登录处理
//    Route::post('login','LoginController@login') -> name('admin.login');
//});

Route::controller(LoginController::class)->group(function () {
    Route::get('/admin/login', 'index')->name('admin.login');
    Route::post('/admin/login', 'login')->name('admin.login');
});
