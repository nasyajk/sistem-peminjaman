<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelSoftware extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_software')
            ->orderBy('nama_lengkap', 'DESC')
            ->get()->getResultArray();
    }
}
