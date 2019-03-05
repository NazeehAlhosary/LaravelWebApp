@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($posts)>0)
        @foreach ($posts as $post)
            <div class="card m-2 px-2 py-4"  >
                <h3> <a href="/posts/{{$post->id}}"> {{$post->title}} </a> </h3>
            <small> Written on: {{$post->created_at}},  by: {{$post->user->name}}</small>
            </div>
           
        @endforeach
       <br><hr>
        <div class="d-flex justify-content-center"> {{$posts->links()}} </div> 
    @else
            <p>No Posts Found!</p>
        @endif
@endsection