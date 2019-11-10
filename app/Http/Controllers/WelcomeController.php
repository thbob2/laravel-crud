<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Category;
class WelcomeController extends Controller
{
    public function index(){

        return view('welcome')
        ->with('posts', Post::searched()->simplePaginate(3))
        ->with('tags', Tag::all())
        ->with('categories', Category::all());
    }


}
