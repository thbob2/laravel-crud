<?php

namespace App\Http\Controllers;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Requests\Tags\CreateTagRequest;
use App\Http\Requests\Tags\UpdateTagRequest;
class TagsController extends Controller
{
    //
    public function index(){
        return view('tags.index')->with('tags',Tag::all());
    }

    public function create(){

        return view('tags.create');

    }

    public function store(CreateTagRequest $request){

        Tag::create(['name' => $request->name

        ]);
        session()->flash('success','Tag create Successfully');
        return redirect(route('tags.index'));
    }



}
