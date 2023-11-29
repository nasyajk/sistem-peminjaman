<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelNonyazaki;

class Nonyazaki extends BaseController
{
    protected $Nonyazaki;
    public function __construct()
    {
        helper('form');
        $this->Nonyazaki = new ModelNonyazaki;
    }

    public function index()
    {
        $data = [
            'title' => 'Listing Checksheet',
            'page' => 'form_nonyazaki/v_nonyazaki',
            'yazaki' => $this->Nonyazaki->AllData(),
        ];
        return view('pages/v_template_admin', $data);
    }
}
