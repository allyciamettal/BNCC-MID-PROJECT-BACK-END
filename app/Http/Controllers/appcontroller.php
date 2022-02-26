<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\library;

class appcontroller extends Controller
{
    public function idx()
    {
        $library = library::all();
        return view('home', compact('library'));
    }
}
