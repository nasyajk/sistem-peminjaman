<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelStorage extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_mregister')
            ->orderBy('nama_m', 'DESC')
            ->get()->getResultArray();
    }
}
