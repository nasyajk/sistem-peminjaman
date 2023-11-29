<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelFfileserver;

class Ffileserver extends BaseController
{
    protected $Ffileserver;
    public function __construct()
    {
        helper('form');
        $this->Ffileserver = new ModelFfileserver;
    }

    public function index()
    {
        $data = [
            'title' => 'Form Checksheet',
            'page' => 'form_fileserver/v_ffileserver',
        ];
        return view('pages/v_template_admin', $data);
    }

    public function Add()
    {
        $data = [
            'status_req' => $this->request->getPost('status_req'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'department' => $this->request->getPost('department'),
            'ttd_sspv' => $this->request->getPost('ttd_sspv'),
            'tgl_pengisian' => $this->request->getPost('tgl_pengisian'),
            'ttd_pic' => $this->request->getPost('ttd_pic'),
            'tujuan' => $this->request->getPost('tujuan'),
            'area' => $this->request->getPost('area'),
            'nama_komputer' => $this->request->getPost('nama_komputer'),
            'user_komputer' => $this->request->getPost('user_komputer'),
            'ip' => $this->request->getPost('ip'),
            'notes' => $this->request->getPost('notes'),
            'ttd' => $this->request->getPost('ttd'),
            'is_date' => $this->request->getPost('is_date')
        ];
        $this->Ffileserver->Add($data);
        session()->setFlashdata('pesan', 'Sukses insert Form!');
        return redirect()->to(base_url('Fileserver'));
    }
}
