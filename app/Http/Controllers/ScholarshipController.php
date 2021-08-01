<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    //

    public function show()
    {
        return view('scholarship');
    }

    public function form()
    {
        return view('form');
    }

}
