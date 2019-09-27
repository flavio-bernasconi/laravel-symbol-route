<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{


  public function getNumbers(){

    $arr = [];
    $class = "orange";
    $title = "numeri";

    for ($i=0; $i <= 10 ; $i++) {
      $number = $i;
      $arr[] = $number;
    }

    return view('myView', compact('arr','class','title'));

  }

  public function getLetters(){

    $arr =range('A', 'Z');
    $class = "red";
    $title = "letters";

    return view('myView', compact('arr','class','title'));

  }



}
