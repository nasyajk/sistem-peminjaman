<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFsoftware extends Model
{
    public function Add($data)
    {
        $this->db->table('tbl_software')->insert($data);
    }
}
