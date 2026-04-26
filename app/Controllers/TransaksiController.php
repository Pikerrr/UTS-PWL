<?php

namespace App\Controllers;

class TransaksiController extends BaseController
{
    public function index(): string
    {
        return view('/admin/v_keranjang');
    }
}