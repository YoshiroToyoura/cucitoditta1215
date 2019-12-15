<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CucitodittaController extends Controller
{
    public function add ()
    {
        return view('admin.cucitoditta.top');
    }
}
