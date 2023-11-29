<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelFlaptop;

class Flaptop extends BaseController
{
    protected $Flaptop;
    public function __construct()
    {
        helper('form');
        $this->Flaptop = new ModelFlaptop;
    }

    public function index()
    {
        $data = [
            'title' => 'Form Checksheet',
            'page' => 'form_laptop/v_flaptop',
        ];
        return view('pages/v_template_admin', $data);
    }

    public function Add()
    {
        $data = [
            'status_req' => $this->request->getPost('status_req'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'department' => $this->request->getPost('department'),
            'tgl_pengisian' => $this->request->getPost('tgl_pengisian'),
            'ttd_pic' => $this->request->getPost('ttd_pic'),
            'notes' => $this->request->getPost('notes'),
            'sspv' => $this->request->getPost('sspv'),
            'mgr' => $this->request->getPost('mgr'),
            'dfm' => $this->request->getPost('dfm'),
            'nama_pc' => $this->request->getPost('nama_pc'),
            'nama_laptop' => $this->request->getPost('nama_laptop'),
            'spv_it' => $this->request->getPost('spv_it'),
            'it_mgr' => $this->request->getPost('it_mgr'),
            'ad' => $this->request->getPost('ad'),
            'is_date' => $this->request->getPost('is_date'),
            'reason' => $this->request->getPost('reason')
        ];
        $this->Flaptop->Add($data);
        session()->setFlashdata('pesan', 'Sukses insert Form!');
        return redirect()->to(base_url('Laptop'));
    }
}
