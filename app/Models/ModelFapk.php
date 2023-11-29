<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFapk extends Model
{
    public function Add($data)
    {
        $this->db->table('tbl_bringout')->insert($data);
    }
}
