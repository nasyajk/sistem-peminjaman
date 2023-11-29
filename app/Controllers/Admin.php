<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Admin',
            'page' => 'pages/v_admin',
        ];
        return view('pages/v_template_admin', $data);
    }
}
