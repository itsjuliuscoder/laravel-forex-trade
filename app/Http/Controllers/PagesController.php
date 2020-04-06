<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

      $title = 'Forex Trading';

      return view('index')->with(['title'=> $title]);
    }
}
