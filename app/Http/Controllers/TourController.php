<?php

namespace App\Http\Controllers;

use App\Models\KeyValue;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TourController extends Controller
{
    public function index()
    {
        $res =  KeyValue::where('key', '=', 'TOURS')->get()->first();
        $tours = $res->value;
        return view('page.tour', compact('tours'));
    }
}
