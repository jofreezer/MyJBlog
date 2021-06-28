@extends('layouts.authornavbar')

@section('content')
    <a href="/home" class="btn btn-primary">My Posts</a>
   
    <h1>Create Post</h1>
 
    {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST']) !!}
    
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '',['class'=>'form-control', 'placeholder'=>'Title '])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Full name')}}
        {{Form::textarea('body', '',['class'=>'form-control','placeholder'=>' Body'])}}
    </div>
  
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
@endsection


