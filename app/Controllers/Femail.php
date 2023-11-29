<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelFemail;

class Femail extends BaseController
{
    protected $Femail;
    public function __construct()
    {
        helper('form');
        $this->Femail = new ModelFemail;
    }

    public function index()
    {
        $data = [
            'title' => 'Form Checksheet',
            'page' => 'form_email/v_femail',
        ];
        return view('pages/v_template_admin', $data);
    }

    public function Add()
    {
        $data = [
            'status_request' => $this->request->getPost('status_request'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'department' => $this->request->getPost('department'),
            'req_date' => $this->request->getPost('req_date'),
            'req_by' => $this->request->getPost('req_by'),
            'nama_pengguna' => $this->request->getPost('nama_pengguna'),
            'pass' => $this->request->getPost('pass'),
            'email_address' => $this->request->getPost('email_address'),
            'create_date' => $this->request->getPost('create_date'),
            'end_date' => $this->request->getPost('end_date'),
            'notes' => $this->request->getPost('notes')
        ];
        $this->Femail->Add($data);
        session()->setFlashdata('pesan', 'Sukses insert Form!');
        return redirect()->to(base_url('Email'));
    }
}
