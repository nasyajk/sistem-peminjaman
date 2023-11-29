<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFhardware extends Model
{
    public function Add($data)
    {
        $this->db->table('tbl_hardware')->insert($data);
    }
}
