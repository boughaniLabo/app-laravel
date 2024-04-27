<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Album; 

class MusicController extends Controller
{
    public function index()
    {
        $allSongs = Song::all();
        $allAlbums= Album::all() ; 
        return view('page.music' , ["songs" => $allSongs,"albums"=> $allAlbums]);
    }
}
