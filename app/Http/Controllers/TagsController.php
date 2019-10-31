<?php

namespace App\Http\Controllers;
use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    //
    public function index(){
        return view('tags.index')->with('tags',Tag::all());
    }
}
