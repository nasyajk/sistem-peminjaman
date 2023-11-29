<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFlaptop extends Model
{
    public function Add($data)
    {
        $this->db->table('tbl_laptop')->insert($data);
    }
}
