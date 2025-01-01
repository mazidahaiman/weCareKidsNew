<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        return view('forum.index', compact('posts'));
    }

    public function create()
    {
        return view('forum.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->user_id = auth()->id();
        $post->save();

        return redirect()->route('forum.index')->with('success', 'Post created successfully.');
    }

    public function show($id)
    {
        $post = Post::with(['user', 'comments.user'])->findOrFail($id);
        return view('forum.show', compact('post'));
    }

    public function storeComment(Request $request, $postId)
    {
        $request->validate([
            'comment' => 'required|string',
        ]);

        $comment = new Comment();
        $comment->post_id = $postId;
        $comment->user_id = auth()->id();
        $comment->content = $request->comment;
        $comment->save();

        return redirect()->route('forum.show', $postId)->with('success', 'Comment added successfully.');
    }
}
