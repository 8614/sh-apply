<?php

class AdminController extends BaseController {

    // 登录
    public function login()
    {
        return View::make('admin.login');
    }

    // do-登录
    public function doLogin()
    {

        $phone     = Input::get('phone', '');
        $password  = Input::get('password', '');

        //检查密码

        return json_encode([]);
    }

    //首页
    public function index()
    {
        return View::make('admin.index');
    }

    //首页展示页
    public function home()
    {
        return View::make('admin.home');
    }
}
