<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelFusername;

class Fusername extends BaseController
{
    protected $Fusername;
    public function __construct()
    {
        helper('form');
        $this->Fusername = new ModelFusername;
    }

    public function index()
    {
        $data = [
            'title' => 'Form Checksheet',
            'page' => 'form_username/v_fusername',
        ];
        return view('pages/v_template_admin', $data);
    }

    public function Add()
    {
        $data = [
            'status_req' => $this->request->getPost('status_req'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'department' => $this->request->getPost('department'),
            'tgl_pem' => $this->request->getPost('tgl_pem'),
            'ttd_spv' => $this->request->getPost('ttd_spv'),
            'usn' => $this->request->getPost('usn'),
            'pass' => $this->request->getPost('pass'),
            'email' => $this->request->getPost('email'),
            'usn_s' => $this->request->getPost('usn_s'),
            'pw_s' => $this->request->getPost('pw_s'),
            'notes' => $this->request->getPost('notes'),
            'spv_it' => $this->request->getPost('spv_it'),
            'tgl_ap' => $this->request->getPost('tgl_ap')
        ];
        $this->Fusername->Add($data);
        session()->setFlashdata('pesan', 'Sukses insert Form!');
        return redirect()->to(base_url('Username'));
    }
}
