<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tiket()
    {
        return view('pages.tiket');
    }
}
