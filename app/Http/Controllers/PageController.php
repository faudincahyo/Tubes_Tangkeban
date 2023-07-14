<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function tiket()
    {
        $data = Admin::all();
        return view('pages.tiket', compact('data'));
    }

    public function tentang()
    {
        return view('pages.tentang');
    }
}
