@extends('layouts.app')

@section('content')

@if(Auth::check())
<section class="container">
    <div class="content">
        <h1>
            Welcome to Admin Area, {{Auth::user()->name}}
        </h1>
        <div class="row">
            <div class="col-md-6">
            <form name="add_post" method="POST" action="{{URL::route('add_post')}}">
                <div class="form-group">
                    <input class="form-control" type="text" name="title" placeholder="Post Title" value=""/>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="content" placeholder="Post Content"></textarea>
                </div>
                <p>
                    <input class="btn btn-primary form-control" type="submit" name="submit"/>
                </p>
            </form>
            </div>
        </div>
    </div>
</section>
@else
<section class="container">
    <div class="login">
        <div class="row">
            <div class="col-md-3">&nbsp;</div>
            <div class="col-md-6">
                <h1>Please Login</h1>
                <form name="login" method="POST" action="{{URL::route('login')}}">
                    <div class="form-group">
                        <input class="form-control" type="text" name="email" value="" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" value="" placeholder="Password">
                    </div>
                    <p>
                        <input class="btn btn-primary form-control" type="submit" name="commit" value="Login">
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>
@endif

@endsection
