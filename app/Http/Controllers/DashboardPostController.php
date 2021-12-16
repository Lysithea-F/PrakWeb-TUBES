<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest();

        if (request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%');
        }

        return view('dashboard.posts.index', [
            'posts' => $posts->get()
        ]);

        // return view('dashboard.posts.index', [
        //     'posts' => Post::all()
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'genre' => 'required',
            'slug' => 'required|unique:posts',
            'release_date' => 'date',
            'poster_path' => 'image|file|max:1024',
            'overview' => 'required',
            'popularity' => 'required',
        ]);

        if($request->file('poster_path')) {
            $validatedData['poster_path'] = $request->file('poster_path')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['overview'] = Str::limit(strip_tags($request->overview), 200);

        Post::create($validatedData);

        return redirect('/dashboard/posts')->with('success', 'New Post has Been Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show',[
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'title' => 'required|max:255',
            'genre' => 'required',     
            'release_date' => 'date',
            'poster_path' => 'image|file|max:1024',
            'overview' => 'required',
            'popularity' => 'required'
        ];

        if($request->slug != $post->slug){
            $rules['slug'] = 'required|unique:posts';
        }

        $validatedData = $request->validate($rules);
        if($request->file('poster_path')) {
            $validatedData['poster_path'] = $request->file('poster_path')->store('post-images');
        }
        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['overview'] = Str::limit(strip_tags($request->overview), 200);

        Post::where('id', $post->id)
            ->update($validatedData);

        return redirect('dashboard/posts')->with('success', 'Post has Been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if($post->image) {
            Storage::delete($post->image);
        }
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Post has Been Deleted!');
    }
}
