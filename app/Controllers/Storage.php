<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelStorage;

class Storage extends BaseController
{
    protected $Storage;
    public function __construct()
    {
        helper('form');
        $this->Storage = new ModelStorage;
    }

    public function index()
    {
        $data = [
            'title' => 'Listing Checksheet',
            'page' => 'form_storage/v_storage',
            'storage' => $this->Storage->AllData(),
        ];
        return view('pages/v_template_admin', $data);
    }
}
