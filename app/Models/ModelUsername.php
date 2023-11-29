<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelUsername extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_permintaan')
            ->orderBy('nama_lengkap', 'DESC')
            ->get()->getResultArray();
    }
}
