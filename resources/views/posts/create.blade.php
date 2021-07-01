@extends('layouts.authornavbar')

@section('content')
<div class="row">
    <div class="col-8">
    <a href="/home" class="btn btn-primary">My Posts</a>
   
    <h1>Create a Blog</h1>
 
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
        {{Form::label('body', 'Create Your Post')}}
        {{Form::textarea('body', '',['class'=>'form-grop ckeditor form-control','placeholder'=>' Your Blog ','cols'=>20,'rows'=>0,'maxlength'=>'400'])}}
    </div>
  
        {{Form::submit('submit',['class'=>'btn btn-primary'])}}
    </div>
{!! Form::close() !!}
</div>
</div>
@endsection


