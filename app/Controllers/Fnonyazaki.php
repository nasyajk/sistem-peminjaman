<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelFnonyazaki;

class Fnonyazaki extends BaseController
{
    protected $Fnonyazaki;
    public function __construct()
    {
        helper('form');
        $this->Fnonyazaki = new ModelFnonyazaki;
    }

    public function index()
    {
        $data = [
            'title' => 'Form Checksheet',
            'page' => 'form_nonyazaki/v_fnonyazaki',
        ];
        return view('pages/v_template_admin', $data);
    }

    public function Add()
    {
        $data = [
            'tanggal' => $this->request->getPost('tanggal'),
            'network' => $this->request->getPost('network'),
            'check_a' => $this->request->getPost('check_a'),
            'nama_software' => $this->request->getPost('nama_software'),
            'check_v' => $this->request->getPost('check_v'),
            'ver' => $this->request->getPost('ver'),
            'purpose_connection' => $this->request->getPost('purpose_connection'),
            'lainnya' => $this->request->getPost('lainnya'),
            'mulai' => $this->request->getPost('mulai'),
            'until' => $this->request->getPost('until'),
            'connec_p' => $this->request->getPost('connec_p'),
            'user' => $this->request->getPost('user'),
            'device_id' => $this->request->getPost('device_id'),
            'op' => $this->request->getPost('op'),
            '_sd' => $this->request->getPost('_sd'),
            'ac_p' => $this->request->getPost('ac_p'),
            'mac_a' => $this->request->getPost('mac_a'),
            'ttd_it' => $this->request->getPost('ttd_it'),
            'ttd_spv' => $this->request->getPost('ttd_spv'),
            'ttd_p' => $this->request->getPost('ttd_p')
        ];
        $this->Fnonyazaki->Add($data);
        session()->setFlashdata('pesan', 'Sukses insert Form!');
        return redirect()->to(base_url('Nonyazaki'));
    }
}
