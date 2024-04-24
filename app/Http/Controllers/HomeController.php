<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('page.home', ['image' => '/assets/img/home1.jpg']);
    }
}
