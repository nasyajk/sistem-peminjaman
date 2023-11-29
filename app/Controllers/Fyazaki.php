<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelFyazaki;

class Fyazaki extends BaseController
{
    protected $Fyazaki;
    public function __construct()
    {
        helper('form');
        $this->Fyazaki = new ModelFyazaki;
    }

    public function index()
    {
        $data = [
            'title' => 'Form Checksheet',
            'page' => 'form_yazaki/v_fyazaki',
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
            'ip' => $this->request->getPost('ip'),
            'subnet' => $this->request->getPost('subnet'),
            'gw' => $this->request->getPost('gw'),
            'dns_s' => $this->request->getPost('dns_s'),
            'dns_p' => $this->request->getPost('dns_p'),
            'mac' => $this->request->getPost('mac'),
            'ttd_it' => $this->request->getPost('ttd_it'),
            'ttd_spv' => $this->request->getPost('ttd_spv'),
            'ttd_p' => $this->request->getPost('ttd_p')
        ];
        $this->Fyazaki->Add($data);
        session()->setFlashdata('pesan', 'Sukses insert Form!');
        return redirect()->to(base_url('Yazaki'));
    }
}
