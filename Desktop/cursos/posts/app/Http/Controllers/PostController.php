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
        //
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Recibe parametros del formulario para crear un nuevo post
        //dd($request);

        if($request->ajax()){
            
            $post = new Post;
            //dd($post);
            $post->title = $request->title; 
            //dd($post->title);
            //dd($post);
            $post->description = $request->description;
            
            $post->save();
            return (String) view('posts._row_post', compact('post'));
        }


        $post = new Post;
        //dd($post);
        $post->title = $request->title; 
        //dd($post->title);
        //dd($post);
        $post->description = $request->description;
        
        $post->save();

        return redirect()->route('posts.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, Request $request)
    {
        //
       // dd($request->ajax());

        if($request->ajax()){
            return response()->json($post);
        }
   
        return view('posts/show', compact('post'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
      
        return view('posts/edit', compact('post'));
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
        //
        $post->title = $request->title;
        $post->description = $request->description;

        $post->save();

        return redirect()->route('posts.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        $post->delete();
        return redirect()->route('posts.index');

    }
}
