<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFnonyazaki extends Model
{
    public function Add($data)
    {
        $this->db->table('tbl_nonyazaki')->insert($data);
    }
}
