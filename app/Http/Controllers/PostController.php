<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::orderBy('id','desc')->paginate(4);
        return view('posts.index')->withPosts($posts);
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
        //validate the data
        $this->validate($request, array(
                'title' => 'required|max:255',
                'slug'  => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                'body'  => 'required'
            ));

        //store in the database

        $post = new Post;
        $post->body  = $request->body;
        $post->slug  = $request->slug;
        $post->title = $request->title;
        $post->save();

        Session::flash('success','The blog post is successfully saved!');

        //redirect to another page
        return redirect()->route('posts.show', $post->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post = Post::find($id);
        return view('posts.show')->withPost($post);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $posts = Post::find($id);

        return view('posts.edit')->withPost($posts);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        if($request->input('slug') == $post->slug ){
        $this->validate($request, array(
                'title' => 'required|max:255',
                'body'  => 'required'
            ));
          }else {
            $this->validate($request, array(
                    'title' => 'required|max:255',
                    'slug'  => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
                    'body'  => 'required'
                ));
            # code...
          }

        $posts = Post::find($id);

        $posts->title = $request->input('title');
        $posts->slug  = $request->input('slug');
        $posts->body = $request->input('body');

        $posts->save();

        Session::flash('success','The blog post is successfully updated!');

        return view('posts.show')->withPost($posts);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = Post::find($id)->delete();


        Session::flash('success','The blog post is successfully Deleted!');

        return redirect()->route('posts.index');

    }
}
