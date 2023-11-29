<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHardware extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_hardware')
            ->orderBy('nama_lengkap', 'DESC')
            ->get()->getResultArray();
    }
}
