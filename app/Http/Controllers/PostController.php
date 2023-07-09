<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\QueryFilters\Active;
use App\QueryFilters\Sort;
use Illuminate\Http\Request;
use Illuminate\Pipeline\Pipeline;

class PostController extends Controller
{
    public function index(){

        $posts=Post::allPosts();

        return view('post.index',['posts'=>$posts]);
    }
}
