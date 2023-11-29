<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelMeetings extends Model
{
    public function AllData()
    {
        return $this->db->table('tbl_meeting')
            ->orderBy('nama_lengkap', 'DESC')
            ->get()->getResultArray();
    }
}
