<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelFileserver;

class Fileserver extends BaseController
{
    protected $Fileserver;
    public function __construct()
    {
        helper('form');
        $this->Fileserver = new ModelFileserver;
    }

    public function index()
    {
        $data = [
            'title' => 'Listing Checksheet',
            'page' => 'form_fileserver/v_fileserver',
            'fileserver' => $this->Fileserver->AllData(),
        ];
        return view('pages/v_template_admin', $data);
    }
}
