<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelFstorage;

class Fstorage extends BaseController
{
    protected $Fstorage;
    public function __construct()
    {
        helper('form');
        $this->Fstorage = new ModelFstorage;
    }

    public function index()
    {
        $data = [
            'title' => 'Form Checksheet',
            'page' => 'form_storage/v_fstorage',
        ];
        return view('pages/v_template_admin', $data);
    }

    public function Add()
    {
        $data = [
            'status_request' => $this->request->getPost('status_request'),
            'nama_m' => $this->request->getPost('nama_m'),
            'department' => $this->request->getPost('department'),
            'ttd_m' => $this->request->getPost('ttd_m'),
            'tgl' => $this->request->getPost('tgl'),
            'no_m' => $this->request->getPost('no_m'),
            'email_m' => $this->request->getPost('email_m'),
            'nama_pic' => $this->request->getPost('nama_pic'),
            'ttd_pic' => $this->request->getPost('ttd_pic'),
            'no_pic' => $this->request->getPost('no_pic'),
            'email_pic' => $this->request->getPost('email_pic'),
            'desc_detail' => $this->request->getPost('desc_detail'),
            'desc_ad' => $this->request->getPost('desc_ad'),
            'desc_sc' => $this->request->getPost('desc_sc'),
            'ttd' => $this->request->getPost('ttd'),
            'nama_it' => $this->request->getPost('nama_it'),
            'r_date' => $this->request->getPost('r_date'),
            'reg_no' => $this->request->getPost('reg_no'),
            'analyzing' => $this->request->getPost('analyzing'),
            'reason' => $this->request->getPost('reason'),
            'ttd_it' => $this->request->getPost('ttd_it')
        ];
        $this->Fstorage->Add($data);
        session()->setFlashdata('pesan', 'Sukses insert Form!');
        return redirect()->to(base_url('Storage'));
    }
}
