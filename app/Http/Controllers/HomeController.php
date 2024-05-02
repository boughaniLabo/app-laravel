<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KeyValue;
use App\Models\Song;

class HomeController extends Controller
{
    public function index()
    {
        $keyValue =  KeyValue::where('key', '=', 'GALLERY')->get()->first();
        $favSong =  KeyValue::where('key', '=', 'FAV_SONG')->get()->first();
        $videos =  KeyValue::where('key', '=', 'VIDEOS')->get()->first();
        $allSongs = Song::take(4)->get();
        return view('page.home', [
            'image' => '/assets/img/home1.png', "gallerie1" =>
            array_slice($keyValue->value, 0, 2),
            "gallerie2" =>  array_slice($keyValue->value, 2, 4),
            "gal" => $keyValue->value,
            "mainSong" => (object) $favSong->value,
            "videos" => $videos->value , 
            "latests" => $allSongs , 
            "latestMobile" => array_slice($allSongs->toArray() , 0 , 2) , 
            "latestMobile2" => array_slice($allSongs->toArray() , 2 , 4) , 
        ]);
    }
}
