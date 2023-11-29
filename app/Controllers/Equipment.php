<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelEquipment;

class Equipment extends BaseController
{
    protected $Equipment;
    public function __construct()
    {
        helper('form');
        $this->Equipment = new ModelEquipment;
    }

    public function index()
    {
        $data = [
            'title' => 'Listing Checksheet',
            'page' => 'form_equipment/v_equipment',
            'equipment' => $this->Equipment->AllData(),
        ];
        return view('pages/v_template_admin', $data);
    }
}
