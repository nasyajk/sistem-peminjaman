<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFemail extends Model
{
    public function Add($data)
    {
        $this->db->table('tbl_email')->insert($data);
    }
}
