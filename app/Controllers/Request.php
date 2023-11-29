<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelRequest;

class Request extends BaseController
{
    protected $Request;
    public function __construct()
    {
        helper('form');
        $this->Request = new ModelRequest;
    }

    public function index()
    {
        $data = [
            'title' => 'Listing Checksheet',
            'page' => 'form_request/v_request',
            'request' => $this->Request->AllData(),
        ];
        return view('pages/v_template_admin', $data);
    }
}
