<?php

class EmployeeProfile extends Controller
{
    public function index($a = '', $b = '', $c = '')
    {
        // echo "this is a about controller";
        $this->view('employee/profile');
    }
} 