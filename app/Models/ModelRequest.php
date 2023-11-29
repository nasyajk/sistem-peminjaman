<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelRequest extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_relayout')
            ->orderBy('nama_lengkap', 'DESC')
            ->get()->getResultArray();
    }
}
