<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use function MongoDB\BSON\toJSON;

class LoginController extends Controller
{
    // 登录显示
    public function index()
    {
        // 指定视图的模版
        return view('admin.login.login');
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
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
        //验证登录
        if (Auth::attempt($post, $request->has('remember'))) {

            if (Auth::user()->activated == '1') {
                session()->flash('success', '欢迎回来！');
                return redirect()->intended(route('admin.index', [Auth::user()]));
            } else {
                Auth::logout();
                return redirect('/');
            }
        } else {
            // 登录失败后的相关操作
            session()->flash('danger', '很抱歉，您的账号和密码不匹配');
            return redirect()->back();

        }

    }


    public function end()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('login');
    }

}
