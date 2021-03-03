<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\PostRequest;
use App\Post;
use App\Tag;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $query = Post::whereDay('created_at','27')
        //             ->get();                               --answer to 3rd query
        
    
        // $query = Post::has('tags','>=',2)->get();          --answer to 4th query.

        // dd($query);
       $posts =Post::all();
       return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'tags' => 'required'
        ]);
        $data['user_id'] = auth()->user()->id;
        $post=Post::create($data);
        $post->tags()->sync($data['tags']);
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,Post $post)
    {
        $selectedValue = $post->category_id;
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.edit',compact('post','categories','tags','selectedValue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        // dd($request->all());
        $data = $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'tags' => 'required'
        ]);
        $data['user_id'] = auth()->user()->id;
        $post->update($data);
        $post->tags()->sync($data['tags']);
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('posts');
    }
}
