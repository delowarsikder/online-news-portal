<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
  //
  public function index($data)
  {
     echo $data;   
    // return ['name'=>'test','title'=>'AP']
  }
}
