<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BioController extends Controller
{
    public function index()
    {
        return view('page.bio', ['image' => 'assets/img/arti.jpg']);
    }
}
