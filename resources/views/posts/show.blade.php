@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-light mb-5 fa fa-arrow-left"> Go Back</a>

 <h3>{{$post->title}} </h3>
<p>{!! $post->body !!}</p>
<hr>
<small>Written on: {{$post->created_at}} , by: {{$post->user->name}}</small>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-dark">Edit</a>

{!!Form::open(['action' =>['PostsController@destroy',$post->id],'method' =>'POST', 'class'=>'float-right']) !!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class' =>'btn btn-danger'])}}
{!!Form::close()!!}


@endsection