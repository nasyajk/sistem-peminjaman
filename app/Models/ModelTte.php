<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelTte extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_ttm')
            ->orderBy('nama_brg', 'DESC')
            ->get()->getResultArray();
    }
}
