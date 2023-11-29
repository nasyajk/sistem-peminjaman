<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\ModelMeetings;

class Meetings extends BaseController
{
    protected $Meetings;
    public function __construct()
    {
        helper('form');
        $this->Meetings = new ModelMeetings;
    }

    public function index()
    {
        $data = [
            'title' => 'Listing Checksheet',
            'page' => 'form_meeting/v_meetings',
            'meeting' => $this->Meetings->AllData(),
        ];
        return view('pages/v_template_admin', $data);
    }
}
