<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class forgetPassController extends Controller
{
    //
    public function gotoforgetpass()
    {
        return view('forgetPass');
    }
}
