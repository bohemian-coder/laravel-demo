<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class URLController extends Controller
{
    public function index()
    {
        $currenturl = url('');
        
        return view('welcome')->with('currenturl', $currenturl);
    }
}
