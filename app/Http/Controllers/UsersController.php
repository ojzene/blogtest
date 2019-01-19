<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{
    public function postLogin()
    {
        Auth::attempt(array('email' => Input::get('email'),'password' => Input::get('password')));
        return Redirect::route('add_post');

    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::route('index');
    }
}
