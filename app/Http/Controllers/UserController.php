<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{

    public function GoLoginPage(){
        return view('login');
    }
    public function gotoRegisterPage(){
        return view('register');
    }
    public function addNewUser(Request $request){
       /* dd($request->all());*/

        /**
         * validation
        */

        $valid=Validator::make($request->all(),[
            'first_name'=>'required|max:100',
            'last_name'=>'required|max:100',
            'email'=>'required|email|max:50',
            'password'=>'required|min:6|max:10|',
        ],[
            'first_name.required'=>'First name must be required',
            'last_name.required'=>'Last name must be required',
            'email.required'=>'Email cannot be null or empty',
            'password.required'=>'Password cannot be null or empty',
            'password.min'=>'Password at least 6 character long',
            'password.max'=>'Password at most 10 character long'

        ]);


        if($valid->fails()){
            return redirect('/reg')->withErrors($valid);
        }
        user::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
           return redirect('/');

    }
}
