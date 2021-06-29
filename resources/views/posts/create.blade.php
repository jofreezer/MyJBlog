@extends('layouts.authornavbar')

@section('content')
    <a href="/home" class="btn btn-primary">My Posts</a>
   
    <h1>Create Post</h1>
 
    {!! Form::open(['action' => 'PostsController@store', 'method'=>'POST']) !!}
    @csrf
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '',['class'=>'form-control', 'placeholder'=>'Title '])}}
    </div>
    {{-- <div class="form-group">
        <form method="post" action="" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea>
            </div>
        </form>
    </div> --}}
    <div class="form-group">
        {{Form::label('wysiwyg-editor', 'Create Your Post')}}
        {{Form::textarea('body', '',['class'=>' ckeditor form-control','placeholder'=>' Body'])}}
    </div>
  
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
@endsection


