@extends('layouts.app')

@section('content')
<div class="container" id="wrapper">
    <header>
        <h1><a href="/">Allpro Blog</a></h1>
        <p>Welcome to Allpro blog</p>
    </header>
    <section id="main">
        <section id="content">
            @foreach($posts as $post)
            <article>
                <h2>{{$post->title}}</h2>
                <p>{{$post->content}}</p>
                <p><small>Posted by <b>{{$post->Author->name}}</b> at <b>{{$post->created_at}}</b></small></p>
            </article>

            @endforeach
        </section>
        {{$posts->links()}}
    </section>
@endsection
