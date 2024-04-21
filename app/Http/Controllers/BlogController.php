<?php

namespace App\Http\Controllers;

use App\Models\posts as Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('page.blog',compact('posts'));
    }

    public function createPost(Request $request)
    {
        try {
            //Validated
            $validateUser = Validator::make(
                $request->all(),
                [
                    "title" => ["required"],
                    "cover" => ["required"],
                    "date" => ["required"],
                    "content" => ["required"],
                ]
            );
            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 401);
            }
            $product = Post::create([
                "title" => $request->title,
                "description" => $request->description,
                "cover" => $request->cover,
                "date" => $request->date,
                "content" => $request->content,
            ]);

            return response()->json([
                'status' => true,
                'message' => 'post Created Successfully',
                'post' => $product
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }
    public function updatePost(Request $request)
    {
        $postId = $request->id;

        if (!$postId) {
            return response()->json([
                'message' => 'product id is required.',
            ], 400);
        }

        try {
            $post = Post::find($postId);

            if (!$post) {
                return response()->json([
                    'message' => 'post not found',
                ], 404);
            }
            $validateUser = Validator::make(
                $request->all(),
                [
                    "title" => ["required"],
                    "cover" => ["required"],
                    "date" => ["required"],
                    "content" => ["required"],
                ]
            );

            if ($validateUser->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validateUser->errors()
                ], 400);
            }

            $post->cover = $request->cover;
            $post->title = $request->title;
            $post->description = $request->description;
            $post->content = $request->content;
            $post->date = $request->date;

            $post->save();
            return response()->json([
                'status' => true,
                'message' => 'Post Updated Successfully',
                'post' => $post
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }

    }

    public function deletePost($id, Request $request)
    {
        $postId = $id;

        if (!$postId) {
            return response()->json([
                'message' => 'Post id is required.',
            ], 400);
        }

        try {
            $post = Post::find($postId);

            if (!$post) {
                return response()->json([
                    'message' => 'Post not found',
                ], 404);
            }

            $post->delete();

            return response()->json([
                'status' => true,
                'message' => 'post Deleted Successfully',
                'post' => $post
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }
    }

    public function getAllPosts()
    {
        try {
            $services = Post::all();
            return response()->json([
                'status' => true,
                'message' => 'list of services',
                'posts' => $services
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }

    }

    public function getAll()
    {
        try {
            $services = Post::where('publish',1)->get();
            return response()->json([
                'status' => true,
                'message' => 'list of services',
                'posts' => $services
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => $th->getMessage()
            ], 500);
        }

    }
}
