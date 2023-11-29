<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelSoftware;

class Software extends BaseController
{
    protected $Software;
    public function __construct()
    {
        helper('form');
        $this->Software = new ModelSoftware;
    }

    public function index()
    {
        $data = [
            'title' => 'Listing Checksheet',
            'page' => 'form_software/v_software',
            'software' => $this->Software->AllData(),
        ];
        return view('pages/v_template_admin', $data);
    }
}
