<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use APP\User;
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
    public function __construct(){
        $this->middleware('VerifyCategoriesCount')->only(['create','store']);
    }
    public function index()
    {
        $user = auth()->user();
        return view('posts.index')->with('posts',Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create')->with('categories',Category::all())->with('tags',Tag::all());
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
        //save the post
        $post = Post::create([
            'title' => $request->title,
            'description'=> $request->description,
            'content' => $request->content,

            'image' =>  $image,
            'category_id' => $request->category,
            'published_at' =>$request->published_at,
            'user_id' => auth()->user()->id,
        ]);

        if ($request->tags) {

            $post->tags()->attach($request->tags);
        }

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
        return view('posts.create')->with('post',$post)->with('categories',Category::all())->with('tags',Tag::all());
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
            $post->deleteImage();
            $data['image'] = $image;

        }


        //update attributes
        if ($request->tags) {

            $post->tags()->sync($request->tags);
        }
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
            $post->deleteImage();
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
        $trashed = Post::onlyTrashed()->get();
        return view('posts.index')->withPosts($trashed);
    }
    public function restore($id){
        $post = Post::withTrashed()->where('id',$id)->firstorfail();
        $post->restore();
        session()->flash('restored','Post restored  Successfully');
        return redirect()->back();
    }
}
