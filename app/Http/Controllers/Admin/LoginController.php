<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // 登录显示
    public function index()
    {
        // 指定视图的模版
        return view('admin.login.login');
    }

    public function login(Request $request)
    {
        // 表单验证
        $post = $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ], [
            'username.required' => '请输入正确的账号和密码！',
//            'password.required' => '请输入正确的账号和密码！'
        ]);
        dump($post);
        dump($request->all());
    }
}
