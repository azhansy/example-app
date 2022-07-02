<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // 登录显示
    public function index () {
        // 指定视图的模版
        return view('admin.login.login');
    }
}
