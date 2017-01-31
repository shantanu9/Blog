<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    //
    public function getIndex(){

      $posts = Post::orderBy('created_at','desc')->limit(4)->get();
      // return redirect()->route('posts.index');
      return view('pages.welcome')->withPosts($posts);
    }

    public function getContact(){
      return view('pages.contact');
    }

    public function getAbout(){
      $first = "Shantanu";
      $last = "Singh";

      $name = $first." ".$last;
      return view('pages.about')->withName($name);
    }

    // public function

}
