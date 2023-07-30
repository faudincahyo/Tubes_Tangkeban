<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function welcome()
    {
        return view('welcome');
    }
    
    public function index()
    {
        $data = Admin::paginate(3);
        return view('pages.home',compact('data'));
    }

    public function navbar()
    {
        return view('layouts.navbar.navbar');
    }
    
}
