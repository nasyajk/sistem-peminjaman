<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home',
            'page' => 'pages/v_home',
        ];
        return view('pages/v_template', $data);
    }
}
