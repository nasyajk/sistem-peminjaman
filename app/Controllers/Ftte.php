<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelFtte;

class Ftte extends BaseController
{
    protected $Ftte;
    public function __construct()
    {
        helper('form');
        $this->Ftte = new ModelFtte;
    }

    public function index()
    {
        $data = [
            'title' => 'Form Checksheet',
            'page' => 'form_tte/v_ftte',
        ];
        return view('pages/v_template_admin', $data);
    }

    public function Add()
    {
        $data = [
            'diserahkan' => $this->request->getPost('diserahkan'),
            'brp' => $this->request->getPost('brp'),
            'dtail' => $this->request->getPost('dtail'),
            'nama_brg' => $this->request->getPost('nama_brg'),
            'quantity' => $this->request->getPost('quantity'),
            'department' => $this->request->getPost('department'),
            'nama_apk' => $this->request->getPost('nama_apk'),
            'pc_name' => $this->request->getPost('pc_name'),
            'usn' => $this->request->getPost('usn'),
            'ip_u' => $this->request->getPost('ip_u'),
            'ip_w' => $this->request->getPost('ip_w'),
            'checklist' => $this->request->getPost('checklist'),
            'pic_ins' => $this->request->getPost('pic_ins'),
            'spv' => $this->request->getPost('spv')
        ];
        $this->Ftte->Add($data);
        session()->setFlashdata('pesan', 'Sukses insert Form!');
        return redirect()->to(base_url('Tte'));
    }
}
