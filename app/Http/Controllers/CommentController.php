<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function store(Request $request, $postId)
    {
        // Add a comment to a post
        $comment = Comment::create([
            'post_id' => $postId,
            'content' => $request->input('content'),
        ]);

        return response()->json($comment, 201);
    }
    
    public function store(Request $request, Post $post)
    {
        // Validate the request
        $validated = $request->validate([
            'content' => 'required|string|max:255',
        ]);

        // Add a comment to the post
        $comment = $post->comments()->create([
            'content' => $validated['content'],
        ]);

        return response()->json($comment, 201); // Return the created comment
    }

}
?>