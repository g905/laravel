<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //My own controller
    public function index ()
    {
        return view('index');
    }
}
