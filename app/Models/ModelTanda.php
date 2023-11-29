<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTanda extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_tte')
            ->orderBy('nama_barang', 'DESC')
            ->get()->getResultArray();
    }
}
