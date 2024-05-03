<?php

namespace App\Http\Controllers;

use App\Models\KeyValue;
use Illuminate\Pagination\LengthAwarePaginator;

class TourController extends Controller
{
    public function index()
    {
        $res =  KeyValue::where('key', '=', 'TOURS')->get()->first();
        $data = collect($res->value);

        $perPage = 4;

        $count = count($data);

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $currentItems = $data->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $tours = new LengthAwarePaginator($currentItems, $data->count(), $perPage, $currentPage, [
            'path' => LengthAwarePaginator::resolveCurrentPath(),
        ]);

        return view('page.tour', compact('tours','perPage','count'));
    }
}
