<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFrequest extends Model
{
    public function Add($data)
    {
        $this->db->table('tbl_relayout')->insert($data);
    }
}
