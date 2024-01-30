<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
  //
  /**
   * Display register page.
   * 
   * @return \Illuminate\Http\Response
   */
  public function show()
  {
    return view('auth.register');
  }

  /**
   * Handle account registration request
   * 
   * @param RegistrationRequest $request
   * 
   * @return \Illuminate\Http\Response
   */
  public function register(RegistrationRequest $request)
  {
    $user = User::create($request->validated());
    auth()->login($user);
    return redirect('/')->with('success', "Account successfully registered.");
  }
}
