<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFusername extends Model
{
    public function Add($data)
    {
        $this->db->table('tbl_permintaan')->insert($data);
    }
}
