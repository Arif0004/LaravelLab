<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateAccountController extends Controller{



    public function gotoCreateAccount()
    {

        return view('CreateAccount');
    }

}
