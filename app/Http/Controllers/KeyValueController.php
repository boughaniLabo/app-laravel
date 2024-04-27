<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\KeyValue;

class KeyValueController extends Controller
{
    /**
     * Display a listing of the key-value pairs.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keyValues = KeyValue::all();
        return response()->json($keyValues);
    }

    /**
     * Store a newly created key-value pair in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'key' => 'required|string|unique:key_value',
            'value' => 'nullable|string',
        ]);

        $keyValue = KeyValue::create($request->all());
        return response()->json($keyValue, 201);
    }

    /**
     * Display the specified key-value pair.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show($key)
    {
        $keyValue = KeyValue::where('key', $key)->first();
    
        if (!$keyValue) {
            return response()->json(['error' => 'Key not found.'], 404);
        }
    
        return response()->json($keyValue);
    }

    /**
     * Update the specified key-value pair in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $key)
    {
        $request->validate([
            'value' => 'nullable|string',
        ]);
    
        $keyValue = KeyValue::where('key', $key)->first();
    
        if (!$keyValue) {
            return response()->json(['error' => 'Key not found.'], 404);
        }
    
        $keyValue->update($request->all());
        return response()->json($keyValue, 200);
    }

}
