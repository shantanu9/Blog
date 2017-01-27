<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getIndex(){
      return view('pages.welcome');
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
