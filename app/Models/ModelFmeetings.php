<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelFmeetings extends Model
{
    public function Add($data)
    {
        $this->db->table('tbl_meeting')->insert($data);
    }
}
