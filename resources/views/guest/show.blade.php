@extends('layouts.guest')

@section('pageTitle')
    {{$post->title}}
@endsection

@section('content')
    <h1>{{$post->title}}</h1>
    <h5>{{$post->date}}</h5>
    <p>{{$post->content}}</p>

    <div class="mt-5">
       <h3>Commenti</h3>
        <ul>
            @foreach ($post->comments as $comment)
        <li>
             <h5>{{$comment->name}}</h5>
           <p>{{$comment->content}}</p>
        </li>
            @endforeach
        </ul>
    </div>


 @endsection
