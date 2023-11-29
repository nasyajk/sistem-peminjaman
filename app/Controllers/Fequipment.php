<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelFequipment;

class Fequipment extends BaseController
{
    protected $Fequipment;
    public function __construct()
    {
        helper('form');
        $this->Fequipment = new ModelFequipment;
    }

    public function index()
    {
        $data = [
            'title' => 'Form Checksheet',
            'page' => 'form_equipment/v_fequipment',
        ];
        return view('pages/v_template_admin', $data);
    }

    public function Add()
    {
        $data = [
            'pic_req' => $this->request->getPost('pic_req'),
            'nama_barang' => $this->request->getPost('nama_barang'),
            'nama_barang2' => $this->request->getPost('nama_barang2'),
            'nama_barang3' => $this->request->getPost('nama_barang3'),
            'tgl_peminjaman' => $this->request->getPost('tgl_peminjaman'),
            'tgl_pengembalian' => $this->request->getPost('tgl_pengembalian'),
            'keperluan' => $this->request->getPost('keperluan'),
            'area_pengguna' => $this->request->getPost('area_pengguna'),
            'ttd_m' => $this->request->getPost('ttd_m'),
            'ttd_spv' => $this->request->getPost('ttd_spv'),
            'ttd_pic' => $this->request->getPost('ttd_pic'),
            'ttd_is' => $this->request->getPost('ttd_is'),
            'ttd_im' => $this->request->getPost('ttd_im'),
            'ap_de' => $this->request->getPost('ap_de'),
            'reason' => $this->request->getPost('reason')
        ];
        $this->Fequipment->Add($data);
        session()->setFlashdata('pesan', 'Sukses insert Form!');
        return redirect()->to(base_url('Equipment'));
    }
}
