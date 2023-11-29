<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelFsoftware;

class Fsoftware extends BaseController
{
    protected $Fsoftware;
    public function __construct()
    {
        helper('form');
        $this->Fsoftware = new ModelFsoftware;
    }

    public function index()
    {
        $data = [
            'title' => 'Form Checksheet',
            'page' => 'form_software/v_fsoftware',
        ];
        return view('pages/v_template_admin', $data);
    }

    public function Add()
    {
        $data = [
            'req' => $this->request->getPost('req'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'department' => $this->request->getPost('department'),
            'ttd_m' => $this->request->getPost('ttd_m'),
            'tgl' => $this->request->getPost('tgl'),
            'no_hp' => $this->request->getPost('no_hp'),
            'email' => $this->request->getPost('email'),
            'nama_pic' => $this->request->getPost('nama_pic'),
            'ttd_p' => $this->request->getPost('ttd_p'),
            'no_pic' => $this->request->getPost('no_pic'),
            'email_pic' => $this->request->getPost('email_pic'),
            'value_software' => $this->request->getPost('value_software'),
            'info_software' => $this->request->getPost('info_software'),
            'schedule_software' => $this->request->getPost('schedule_software'),
            'req_software' => $this->request->getPost('req_software'),
            'sup_doc' => $this->request->getPost('sup_doc'),
            'ttd_it' => $this->request->getPost('ttd_it'),
            'nama_it' => $this->request->getPost('nama_it'),
            'recv_date' => $this->request->getPost('recv_date'),
            'register_no' => $this->request->getPost('register_no'),
            'analyzing' => $this->request->getPost('analyzing'),
            'reason' => $this->request->getPost('reason'),
            'ttd' => $this->request->getPost('ttd'),
            'is_date' => $this->request->getPost('is_date'),
        ];
        $this->Fsoftware->Add($data);
        session()->setFlashdata('pesan', 'Sukses insert Form!');
        return redirect()->to(base_url('Software'));
    }
}
