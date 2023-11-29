<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelYazaki extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_yazaki')
            ->orderBy('nama_software', 'DESC')
            ->get()->getResultArray();
    }
}
