<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFileserver extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_server')
            ->orderBy('nama_lengkap', 'ASC')
            ->get()->getResultArray();
    }
}
