<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelTanda;

class Tanda extends BaseController
{
    protected $Tanda;
    public function __construct()
    {
        helper('form');
        $this->Tanda = new ModelTanda;
    }

    public function index()
    {
        $data = [
            'title' => 'Listing Checksheet',
            'page' => 'form_tandaterima/v_tanda',
            'tanda' => $this->Tanda->AllData(),
        ];
        return view('pages/v_template_admin', $data);
    }
}
