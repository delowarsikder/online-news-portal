<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    function loadView($name){
        return view('contact',['email'=>'delowar@kuet.ac.bd']);
    }
}
