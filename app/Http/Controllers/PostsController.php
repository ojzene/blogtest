<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use App\Post;

class PostsController extends Controller
{
    public function getIndex()
    {
        $posts = Post::with('Author')->orderBy('id', 'DESC')->paginate('5');
            return View::make('index')->with('posts',$posts);
    }

    public function getAdmin()
    {
        return View::make('addpost');
    }

    public function postAdd()
    {
        Post::create(array(
            'title' => Input::get('title'),
            'content' => Input::get('content'),
            'author_id' => Auth::user()->id
        ));
        return Redirect::route('index');
    }
}
