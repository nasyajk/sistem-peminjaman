<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelFtanda;

class Ftanda extends BaseController
{
    protected $Ftanda;
    public function __construct()
    {
        helper('form');
        $this->Ftanda = new ModelFtanda;
    }

    public function index()
    {
        $data = [
            'title' => 'Form Checksheet',
            'page' => 'form_tandaterima/v_ftanda',
        ];
        return view('pages/v_template_admin', $data);
    }

    public function Add()
    {
        $data = [
            'diserahkan' => $this->request->getPost('diserahkan'),
            'brp' => $this->request->getPost('brp'),
            'dtail' => $this->request->getPost('dtail'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'quantity' => $this->request->getPost('quantity'),
            'department' => $this->request->getPost('department'),
            'pic_barang' => $this->request->getPost('pic_barang'),
            'checklist' => $this->request->getPost('checklist'),
            'pic_reg' => $this->request->getPost('pic_reg'),
            'spv' => $this->request->getPost('spv'),
            'noted' => $this->request->getPost('noted'),
            'spv_p' => $this->request->getPost('spv_p')
        ];
        $this->Ftanda->Add($data);
        session()->setFlashdata('pesan', 'Sukses insert Form!');
        return redirect()->to(base_url('Tanda'));
    }
}
