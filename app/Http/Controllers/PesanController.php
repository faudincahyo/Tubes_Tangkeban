<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index($id)
    {
        $data = Admin::find($id);

        return view('pages.pesan', compact('data'));
    }
}
