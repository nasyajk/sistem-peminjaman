<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelEmail extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_email')
            ->orderBy('nama_lengkap', 'ASC')
            ->get()->getResultArray();
    }
}
