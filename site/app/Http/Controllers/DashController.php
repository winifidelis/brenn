<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function inicio()
    {
        return view('pages.adm.inicio');
    }
}
