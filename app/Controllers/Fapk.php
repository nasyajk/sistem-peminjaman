<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelFapk;

class Fapk extends BaseController
{
    protected $Fapk;
    public function __construct()
    {
        helper('form');
        $this->Fapk = new ModelFapk;
    }

    public function index()
    {
        $data = [
            'title' => 'Form Checksheet',
            'page' => 'form_apk/v_fapk',
        ];
        return view('pages/v_template_admin', $data);
    }

    public function Add()
    {
        $data = [
            'tgl_apk' => $this->request->getPost('tgl_apk'),
            'perusahaan' => $this->request->getPost('perusahaan'),
            'dep' => $this->request->getPost('dep'),
            'nama_pmbw' => $this->request->getPost('nama_pmbw'),
            'lokasi' => $this->request->getPost('lokasi'),
            'keperluan' => $this->request->getPost('keperluan'),
            'tgl_klr' => $this->request->getPost('tgl_klr'),
            'tgl_kmbl' => $this->request->getPost('tgl_kmbl'),
            'chck' => $this->request->getPost('chck'),
            'ttd_ap' => $this->request->getPost('ttd_ap'),
            'tgl_ap' => $this->request->getPost('tgl_ap'),
            'nama_brg' => $this->request->getPost('nama_brg'),
            'maker_m' => $this->request->getPost('maker_m'),
            'mode_m' => $this->request->getPost('mode_m'),
            'serial_m' => $this->request->getPost('serial_m'),
            'check_item' => $this->request->getPost('check_item'),
            'ttd_p' => $this->request->getPost('ttd_p'),
            'tgl_p' => $this->request->getPost('tgl_p'),
            'ttd_b' => $this->request->getPost('ttd_b'),
            'tgl_b' => $this->request->getPost('tgl_b'),
            'p_virus' => $this->request->getPost('p_virus'),
            'tgl_pv' => $this->request->getPost('tgl_pv')
        ];
        $this->Fapk->Add($data);
        session()->setFlashdata('pesan', 'Sukses insert Form!');
        return redirect()->to(base_url('Apk'));
    }
}
