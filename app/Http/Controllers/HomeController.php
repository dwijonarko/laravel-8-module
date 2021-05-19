<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SubscribersExport;
use Maatwebsite\Excel\Facades\Excel;
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

    public function render_subscriber(){
      return view('layouts.subscribers');
    }

    public function export_subscriber(){
        return Excel::download(new SubscribersExport, 'subcribers.xlsx');
    }
}
