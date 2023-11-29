<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelWork;

class Work extends BaseController
{
    protected $Work;
    public function __construct()
    {
        helper('form');
        $this->Work = new ModelWork;
    }

    public function index()
    {
        $data = [
            'title' => 'Listing Checksheet',
            'page' => 'form_work/v_work',
            'work' => $this->Work->AllData(),
        ];
        return view('pages/v_template_admin', $data);
    }
}
