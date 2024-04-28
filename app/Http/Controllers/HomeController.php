<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeyValue ; 
class HomeController extends Controller
{
    public function index()
    {
        $keyValue =  KeyValue::where('key', '=', 'GALLERY')->get()->first();
        return view('page.home', ['image' => '/assets/img/home1.png' , "gallerie1" =>  array_slice($keyValue->value , 0 , 2) , 
        "gallerie2" =>  array_slice($keyValue->value , 2 , 4) , "gal" => $keyValue->value
    
    ]);
    }
}
