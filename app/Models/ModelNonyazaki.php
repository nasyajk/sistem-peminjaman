<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelNonyazaki extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_nonyazaki')
            ->orderBy('nama_software', 'DESC')
            ->get()->getResultArray();
    }
}
