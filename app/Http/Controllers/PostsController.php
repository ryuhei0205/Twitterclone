<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
  public function store(Request $request){
    $params = $request->validate([
      'title' => 'required|max:50',
      'body' => 'required|max:2000',
    ]);
    Post::create($params);

    //dd($request);
  return redirect()->route('home');
  }
    //
}
