<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){

      $title = 'Forex Trading';

      return view('index')->with(['title'=> $title]);
    }

    public function register(){

      $title = 'Register - Forex Trading';

      return view('layouts/register')->with(['title'=> $title]);
    }

    public function login(){

      $title = 'Login - Forex Trading';

      return view('layouts/login')->with(['title'=> $title]);
    }




}
