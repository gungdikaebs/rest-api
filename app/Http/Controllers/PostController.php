<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::all();
        return response()->json($data, 200);
    }

    public function show($id)
    {
        $data =  Post::find($id);
        return response()->json($data, 200);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Post::create($data);
        return response()->json('success', 201);
    }

    public function update(Request $request, Post $post)
    {
        return response()->json($post, 200);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return response()->json(null, 200);
    }
}
