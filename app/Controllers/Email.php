<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelEmail;

class Email extends BaseController
{
    protected $Email;
    public function __construct()
    {
        helper('form');
        $this->Email = new ModelEmail;
    }

    public function index()
    {
        $data = [
            'title' => 'Listing Checksheet',
            'page' => 'form_email/v_email',
            'yazaki' => $this->Email->AllData(),
        ];
        return view('pages/v_template_admin', $data);
    }
}
