<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  public function users_all()
  {  $user = User::all();
    return view('users',['user'=>$user]);
}
}
