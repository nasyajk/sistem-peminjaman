<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelLaptop;

class Laptop extends BaseController
{
    protected $Laptop;
    public function __construct()
    {
        helper('form');
        $this->Laptop = new ModelLaptop;
    }

    public function index()
    {
        $data = [
            'title' => 'Listing Checksheet',
            'page' => 'form_laptop/v_laptop',
            'laptop' => $this->Laptop->AllData(),
        ];
        return view('pages/v_template_admin', $data);
    }
}
