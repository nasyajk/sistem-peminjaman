<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLaptop extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_laptop')
            ->orderBy('nama_lengkap', 'DESC')
            ->get()->getResultArray();
    }
}
