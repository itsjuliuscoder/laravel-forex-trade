<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function home(){

    	$title = 'Dashboard Home - Forex Trading';

      	return view('dashboard/home')->with(['title'=> $title]);
    }

    public function profile(){

    	$title = 'Dashboard Profile - Forex Trading';

      	return view('dashboard/profile')->with(['title'=> $title]);
    }
}
