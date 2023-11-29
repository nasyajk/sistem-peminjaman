<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFtanda extends Model
{
    public function Add($data)
    {
        $this->db->table('tbl_tte')->insert($data);
    }
}
