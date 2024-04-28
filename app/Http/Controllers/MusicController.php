<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Album; 
use App\Models\KeyValue;
class MusicController extends Controller
{
    public function index()
    {
        $allSongs = Song::all();
        $allAlbums= Album::with('songs')->get();
        $keyValue =  KeyValue::where('key', '=', 'BEST_SONGS')->get()->first();
        return view('page.music' , ["songs" => $allSongs,"albums"=> $allAlbums,"values" => array_slice($keyValue->value,0,4) , "values2" =>array_slice($keyValue->value,4,8) ]);
    }
}
