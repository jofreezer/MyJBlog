@extends('layouts.authornavbar')

@section('content')
<div class="row">
    <div class="col-8">
    <a href="/posts" class="btn btn-primary">Go Bck</a>
 
    <h1>Edit My blog</h1>
 
    {!! Form::open(['action' =>['PostsController@update',$post->id], 'method'=>'POST']) !!}
    
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title,['class'=>'form-control', 'placeholder'=>'Title '])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Full name')}}
        {{Form::textarea('body', $post->body,['class'=>'form-control','placeholder'=>' Body','cols'=>20,'rows'=>0,'maxlength'=>'400'])}}
    </div>
      {{Form::hidden('_method','PUT')}}  
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
</div>
</div>
@endsection



