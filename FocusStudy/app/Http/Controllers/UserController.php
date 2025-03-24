<?php

namespace App\Http\Controllers;
Use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
   public function authenticate(){
   return view('auth.login');
   }
   public function create(){
   return view('auth.register');
   }

   public function store(Request $request){

      $input = $request->validate([
         'name' => 'required',
         'email' => 'email|unique:users,email',
         'password' => 'required|min:6|confirmed'
      ]);
      User::create($input);

      return redirect()
      ->route('login')
      ->with('status', 'Usuário Criado com sucesso!!');
  
   }
}
