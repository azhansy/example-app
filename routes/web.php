<?php

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

// 引入定义好的后台路由文件
include base_path('routes/admin/admin.php');

Route::get('/index', function () {
    return view('welcome');
});
//Route::get('/greeting', function () {
//    return 'Hello World';
//});


