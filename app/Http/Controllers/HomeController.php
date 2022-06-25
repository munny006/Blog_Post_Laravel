<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Main;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @//return void
     */
   
    /**
     * Show the application dashboard.
     *
     * @//return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
        $main= Main::first();
        return view('welcome',compact('main'));
    }
    public function dashboard()
    {
        return view('pages.dashboard');
    }
    
}
