<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ApiUploadController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('files')) {
            $urls = [];

            foreach ($request->file('files') as $file) {
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads', $fileName, 'public');

                // Generate the full URL
                $url = asset('storage/' . $filePath);
                $urls[] = $url;
            }

            return response()->json(['urls' => $urls]);
        }

        return response()->json(['error' => 'No files uploaded.'], 400);
    }
}
