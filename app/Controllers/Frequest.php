<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelFrequest;

class Frequest extends BaseController
{
    protected $Frequest;
    public function __construct()
    {
        helper('form');
        $this->Frequest = new ModelFrequest;
    }

    public function index()
    {
        $data = [
            'title' => 'Form Checksheet',
            'page' => 'form_request/v_frequest',
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
            'ttd_u' => $this->request->getPost('ttd_u'),
            'nama_lgkp' => $this->request->getPost('nama_lgkp'),
            'ttd_m' => $this->request->getPost('ttd_m'),
            'tgl' => $this->request->getPost('tgl'),
            'area' => $this->request->getPost('area'),
            'jmlh_pc' => $this->request->getPost('jmlh_pc'),
            'notes' => $this->request->getPost('notes'),
            'ttd' => $this->request->getPost('ttd'),
            'is_date' => $this->request->getPost('is_date'),
            'tgl_relayout' => $this->request->getPost('tgl_relayout'),
            'jam_relayout' => $this->request->getPost('jam_relayout')
        ];
        $this->Frequest->Add($data);
        session()->setFlashdata('pesan', 'Sukses insert Form!');
        return redirect()->to(base_url('Request'));
    }
}
