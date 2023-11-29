<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFfileserver extends Model
{
    public function Add($data)
    {
        $this->db->table('tbl_server')->insert($data);
    }
}
