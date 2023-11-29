<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelApk extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_bringout')
            ->orderBy('perusahaan', 'ASC')
            ->get()->getResultArray();
    }
}
