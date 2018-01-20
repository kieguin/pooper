<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request, Post $post)
    {
        $this->validate($request, [
            'body' => 'required|max:140',
        ]);

        $createdPost = $request->user()->posts()->create([
            'body' => $request->body,
        ]);

        return response()->json($post->with('user')->find($createdPost->id));
    }
}
