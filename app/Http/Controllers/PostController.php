<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $Post)
    {
        return view('posts.index')->with(['posts' => $Post->getPaginateByLimit()]);
    }
    
    public function show(Post $Post)
    {
        dd($Post);
    }
}
