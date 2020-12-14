<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{

    public function index()
    {

        $posts = Post::all();
        return view('posts/index', compact('posts'));

    }


    public function create()
    {
        return view('posts.create');
    }


    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


    public function store(Request $request)
    {

       Post::create($request->input());

        return redirect()->route('posts.index')
            ->with('success', 'Post created successfully.');

    }


    public function update(Request $request, Post $post)
    {

        /*$validator = Validator::make($request->input(), [
            'title' => 'required|unique:posts',
            'text' => 'required'
        ]);

       if ($validator->fails()) {
            return response([
                'success' => false,
                'error' => $validator->errors()
            ], 422);
        }*/

        $post->update($request->input());

        return redirect()->route('posts.index')
            ->with('success', 'Post updated successfully');

    }


    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }


    public function destroy(Post $post)
    {

        $post->delete();

        return redirect()->route('posts.index')
            ->with('success', 'Post deleted successfully');

    }


}
