<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFequipment extends Model
{
    public function Add($data)
    {
        $this->db->table('tbl_equipment')->insert($data);
    }
}
