<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Login',
            'page' => 'v_login'
        ];
        return view('v_template_login', $data);
    }

    public function LoginUser()
    {
        $data = [
            'title' => 'Login User',
            'page' => 'v_login_user'
        ];
        return view('v_template_login', $data);
    }

    public function LoginAnggota()
    {
        $data = [
            'title' => 'Login Anggota',
            'page' => 'v_login_anggota'
        ];
        return view('v_template_login', $data);
    }

}
