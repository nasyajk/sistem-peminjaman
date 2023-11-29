<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelFmeetings;

class Fmeetings extends BaseController
{
    protected $Fmeetings;
    public function __construct()
    {
        helper('form');
        $this->Fmeetings = new ModelFmeetings;
    }

    public function index()
    {
        $data = [
            'title' => 'Form Checksheet',
            'page' => 'form_meeting/v_fmeetings',
        ];
        return view('pages/v_template_admin', $data);
    }

    public function Add()
    {
        $data = [
            'status_req' => $this->request->getPost('status_req'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'department' => $this->request->getPost('department'),
            'tgl' => $this->request->getPost('tgl'),
            'ttd_u' => $this->request->getPost('ttd_u'),
            'tgl_meeting' => $this->request->getPost('tgl_meeting'),
            'r_meeting' => $this->request->getPost('r_meeting'),
            'p_meeting' => $this->request->getPost('p_meeting'),
            'equipment' => $this->request->getPost('equipment'),
            'mulai' => $this->request->getPost('mulai'),
            'selesai' => $this->request->getPost('selesai'),
            'l_meeting' => $this->request->getPost('l_meeting'),
            'k_link' => $this->request->getPost('k_link'),
            'apk' => $this->request->getPost('apk'),
            'item_c' => $this->request->getPost('item_c'),
            'nama_laptop' => $this->request->getPost('nama_laptop'),
            'notes' => $this->request->getPost('notes'),
            'ttd' => $this->request->getPost('ttd'),
            'is_date' => $this->request->getPost('is_date')
        ];
        $this->Fmeetings->Add($data);
        session()->setFlashdata('pesan', 'Sukses insert Form!');
        return redirect()->to(base_url('Meetings'));
    }
}
