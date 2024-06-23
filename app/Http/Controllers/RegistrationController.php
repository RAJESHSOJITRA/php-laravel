<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('form');
    }
    public function registration(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'country'=>'required',
                'gender'=>'required|in:male,female',
                'email'=>'required|email',
                'state'=>'required|',
                'adress'=>'required|',
                'password'=>'required',
            ]
            );
        echo'<pre>';
        var_dump($request->all());
            print_r(($request->all()));
    }       
}
