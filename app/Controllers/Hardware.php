<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelHardware;

class Hardware extends BaseController
{
    protected $Hardware;
    public function __construct()
    {
        helper('form');
        $this->Hardware = new ModelHardware;
    }

    public function index()
    {
        $data = [
            'title' => 'Listing Checksheet',
            'page' => 'form_hardware/v_hardware',
            'hardware' => $this->Hardware->AllData(),
        ];
        return view('pages/v_template_admin', $data);
    }
}
