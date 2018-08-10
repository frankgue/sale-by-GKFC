<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalersController extends Controller
{
    public function create()
    {
        return view('pages.salers');
    }
}
