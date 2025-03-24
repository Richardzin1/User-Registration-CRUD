<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function authenticate(){
   return view('auth.login');
   }
   public function create(){
   return view('auth.register');
   }
}
