<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\Posts\CreatePostRequest;
use App\Http\Requests\Posts\UpdatePostRequest;
use Illuminate\Support\Facades\Storage;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('posts.index')->with('posts',Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePostRequest $request)
    {
        //store the picture
        $image = $request->image->store('posts');
        //create the post
        Post::create([
            'title' => $request->title,
            'description'=> $request->description,
            'content' => $request->content,
            'image' =>  $image,
            'published_at' =>$request->published_at
        ]);
        //save the post

        // session flah
        session()->flash('success','Post Created Successfully');
        //redirect the user
        return redirect(route('posts.index'));
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
        return view('posts.create')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        $data = $request->only(['title','description','published_at','content']);
        //check if new image
        if($request->hasfile('image')){
        //upload it
            $image = $request->image->store('posts');
         //delete old image
            Storage::delete($post->image);
            $data['image'] = $image;

        }


        //update attributes
        $post->update($data);
        //redirect
        session()->flash('success','Post updated Successfully');
        return redirect(route('posts.index'));

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
        $post = Post::withTrashed()->where('id',$id)->firstorfail();
        if($post->trashed()){
            Storage::delete($post->image);
            $post->forceDelete();
            session()->flash('trashed','Post deleted Successfully');

        }else {
            $post->delete();
            session()->flash('trashed','Post moved to trash  Successfully');


        }
        //redirect the user
        return redirect(route('posts.index'));
    }
    /**
     * Update the specified resource in storage.
     * display the trashed item
     */
    public function trashed(){
        $trashed = Post::withTrashed()->get();
        return view('posts.index')->withPosts($trashed);
    }
}
