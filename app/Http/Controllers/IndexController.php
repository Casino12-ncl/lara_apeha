<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
   public function index(){
      $posts = Post::query()->orderBy('created_at', 'DESC')->limit(5)->get();
      
    return view('pivo', [
      'posts' => $posts
    ]);
   }
}