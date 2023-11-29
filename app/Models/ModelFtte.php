<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFtte extends Model
{
    public function Add($data)
    {
        $this->db->table('tbl_ttm')->insert($data);
    }
}
