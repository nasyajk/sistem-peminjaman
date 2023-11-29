<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFwork extends Model
{
    public function Add($data)
    {
        $this->db->table('tbl_request')->insert($data);
    }
}
