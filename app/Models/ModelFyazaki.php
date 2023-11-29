<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFyazaki extends Model
{
    public function Add($data)
    {
        $this->db->table('tbl_yazaki')->insert($data);
    }
}
