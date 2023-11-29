<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelFwork;

class Fwork extends BaseController
{
    protected $Fwork;
    public function __construct()
    {
        helper('form');
        $this->Fwork = new ModelFwork;
    }

    public function index()
    {
        $data = [
            'title' => 'Form Checksheet',
            'page' => 'form_work/v_fwork',
        ];
        return view('pages/v_template_admin', $data);
    }

    public function Add()
    {
        $data = [
            'req' => $this->request->getPost('req'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'department' => $this->request->getPost('department'),
            'pc_nama' => $this->request->getPost('pc_nama'),
            'r_tgl' => $this->request->getPost('r_tgl'),
            'r_wkt' => $this->request->getPost('r_wkt'),
            'ext' => $this->request->getPost('ext'),
            'pdw' => $this->request->getPost('pdw'),
            'desc_p' => $this->request->getPost('desc_p'),
            'ac' => $this->request->getPost('ac'),
            'desc_n' => $this->request->getPost('desc_n'),
            'desc_r' => $this->request->getPost('desc_r'),
            'desc_s' => $this->request->getPost('desc_s'),
            'stat' => $this->request->getPost('stat'),
            'tgl' => $this->request->getPost('tgl'),
            'pic' => $this->request->getPost('pic'),
            'ttd_h' => $this->request->getPost('ttd_h'),
            'ttd_t' => $this->request->getPost('ttd_t'),
            'ttd_r' => $this->request->getPost('ttd_r'),
            'ttd_u' => $this->request->getPost('ttd_u'),
            'ttd_it' => $this->request->getPost('ttd_it')
        ];
        $this->Fwork->Add($data);
        session()->setFlashdata('pesan', 'Sukses insert Form!');
        return redirect()->to(base_url('Work'));
    }
}
