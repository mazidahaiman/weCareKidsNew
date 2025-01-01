<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // Fetch all posts with comments
        $posts = Post::with('comments')->get();
        return response()->json($posts);
    }

    public function store(Request $request)
    {
        // Create a new post
        $post = Post::create([
            'content' => $request->input('content'),
        ]);

        return response()->json($post, 201);
    }

    public function like(Post $post)
    {
        // Increment the like count
        $post->likes++;
        $post->save();

        return response()->json($post);
    }

    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'content' => 'required|string|max:255',
        ]);

        // Create a new post
        $post = Post::create([
            'content' => $validated['content'],
        ]);

        return response()->json($post, 201); // Return the created post
    }
    

}
?>