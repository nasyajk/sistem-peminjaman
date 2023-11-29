<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelApk;

class Apk extends BaseController
{
    protected $Apk;
    public function __construct()
    {
        helper('form');
        $this->Apk = new ModelApk;
    }

    public function index()
    {
        $data = [
            'title' => 'Listing Checksheet',
            'page' => 'form_apk/v_apk',
            'apk' => $this->Apk->AllData(),
        ];
        return view('pages/v_template_admin', $data);
    }
}
