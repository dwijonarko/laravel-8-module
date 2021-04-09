<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('auth.home');
    }

    public function render_users(){
    	return view('layouts.users');
    }

    public function render_dropdown()
    {
      return view('layouts.dropdown'); 
    }
}
