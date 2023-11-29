<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelYazaki;

class Yazaki extends BaseController
{
    protected $Yazaki;
    public function __construct()
    {
        helper('form');
        $this->Yazaki = new ModelYazaki;
    }

    public function index()
    {
        $data = [
            'title' => 'Listin Checksheet',
            'page' => 'form_yazaki/v_yazaki',
            'yazaki' => $this->Yazaki->AllData(),
        ];
        return view('pages/v_template_admin', $data);
    }
}
