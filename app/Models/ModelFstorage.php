<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFstorage extends Model
{
    public function Add($data)
    {
        $this->db->table('tbl_mregister')->insert($data);
    }
}
