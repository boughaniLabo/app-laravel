<?php
namespace App\Http\Controllers;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::all();
        return response()->json($albums);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'year' => 'required|integer',
            'cover' => 'nullable|string',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => 'Validation failed',
                'message' => $validator->errors(),
            ], 422);
        }

        try {
            $album = Album::create($request->all());
            return response()->json(['data' => $album], 201);
        } catch (\Exception $e) {
            \Log::error('Error storing album: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to store album.'], 500);
        }
    }
    public function showWithSongs(string $id)
    {
        $album = Album::with('songs')->find($id);

        if (!$album) {
            return response()->json(['error' => 'Album not found.'], 404);
        }

        return response()->json($album);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $album = Album::find($id);
    
        if (!$album) {
            return response()->json(['error' => 'Album not found.'], 404);
        }
    
        return response()->json($album);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $album = Album::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'year' => 'required|integer',
            'cover' => 'nullable|string',
            'description' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => 'Validation failed',
                'message' => $validator->errors(),
            ], 422);
        }

        try {
            $album->update($request->all());
            return response()->json($album, 200);
        } catch (\Exception $e) {
            \Log::error('Error updating album: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to update album.'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $album = Album::findOrFail($id);
            $album->delete();
            return response()->json(null, 204);
        } catch (\Exception $e) {
            \Log::error('Error deleting album: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to delete album.'], 500);
        }
    }
}
