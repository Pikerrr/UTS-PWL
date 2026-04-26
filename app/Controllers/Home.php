<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('/admin/v_home');
    }
}