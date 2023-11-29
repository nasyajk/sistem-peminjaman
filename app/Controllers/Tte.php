<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelTte;

class Tte extends BaseController
{
    protected $Tte;
    public function __construct()
    {
        helper('form');
        $this->Tte = new ModelTte;
    }

    public function index()
    {
        $data = [
            'title' => 'Listing Checksheet',
            'page' => 'form_tte/v_tte',
            'tte' => $this->Tte->AllData(),
        ];
        return view('pages/v_template_admin', $data);
    }
}
