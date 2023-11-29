<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelUsername;

class Username extends BaseController
{
    protected $Username;
    public function __construct()
    {
        helper('form');
        $this->Username = new ModelUsername;
    }

    public function index()
    {
        $data = [
            'title' => 'Listing Checksheet',
            'page' => 'form_username/v_username',
            'username' => $this->Username->AllData(),
        ];
        return view('pages/v_template_admin', $data);
    }
}
