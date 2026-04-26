<?php

namespace App\Controllers;

class ProdukController extends BaseController
{
    public function index(): string
    {
        return view('/admin/v_produk');
    }
}