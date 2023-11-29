<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelWork extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_request')
            ->orderBy('nama_lengkap', 'DESC')
            ->get()->getResultArray();
    }
}
