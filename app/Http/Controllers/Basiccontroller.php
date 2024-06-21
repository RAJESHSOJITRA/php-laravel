<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Basiccontroller extends Controller
{
   function index(){
        return view('home1');
   }

   function about(){
    return view('about');
   }
}
