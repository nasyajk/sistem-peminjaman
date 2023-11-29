<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelFhardware;

class Fhardware extends BaseController
{
    protected $Fhardware;
    public function __construct()
    {
        helper('form');
        $this->Fhardware = new ModelFhardware;
    }

    public function index()
    {
        $data = [
            'title' => 'Form Checksheet',
            'page' => 'form_hardware/v_fhardware',
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
            'hardware_i' => $this->request->getPost('hardware_i'),
            'value_hardware' => $this->request->getPost('value_hardware'),
            'desc_hardware' => $this->request->getPost('desc_hardware'),
            'schedule_hardware' => $this->request->getPost('schedule_hardware'),
            'desc_software' => $this->request->getPost('desc_software'),
            'desc_s' => $this->request->getPost('desc_s'),
            'ttd_it' => $this->request->getPost('ttd_it'),
            'nama_it' => $this->request->getPost('nama_it'),
            'recv_date' => $this->request->getPost('recv_date'),
            'register_no' => $this->request->getPost('register_no'),
            'analyzing' => $this->request->getPost('analyzing'),
            'av_eq' => $this->request->getPost('av_eq'),
            'reason' => $this->request->getPost('reason'),
            'ttd' => $this->request->getPost('ttd'),
            'is_date' => $this->request->getPost('is_date')
        ];
        $this->Fhardware->Add($data);
        session()->setFlashdata('pesan', 'Sukses insert Form!');
        return redirect()->to(base_url('Hardware'));
    }
}
