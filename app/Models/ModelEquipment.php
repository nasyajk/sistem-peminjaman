<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelEquipment extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_equipment')
            ->orderBy('pic_req', 'ASC')
            ->get()->getResultArray();
    }
}
