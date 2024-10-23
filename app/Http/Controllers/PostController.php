<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { {
            //
            $posts = Post::all();
            return view('posts')->with('posts', $posts);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'author' => 'required',
            'postingan' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('posts.index')->withErrors($validator);
        }

        Post::create([
            'title' => $request->get('title'),
            'author' => $request->get('author'),
            'postingan' => $request->get('postingan')
        ]);

        return redirect()->route('posts.index')->with('success', 'Inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $post = Post::where('id', $id)->first();
        return view('post', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'postingan' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('posts.edit', ['post' => $id])->withErrors($validator);
        }



        $post = Post::where('id', $id)->first();
        $post->title = $request->get('title');
        $post->author = $request->get('author');
        $post->is_completed = $request->get('is_completed');
        $post->save();

        return redirect()->route('posts.index')->with('success', 'Updated Post');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Post::where('id', $id)->delete();
        return redirect()->route('posts.index')->with('success', 'Deleted Posts');
    }
}
