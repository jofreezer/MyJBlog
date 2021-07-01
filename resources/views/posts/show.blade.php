@extends('layouts.authornavbar')

@section('content')
<div class="row">
    <div >
    <a href="/posts" class="btn btn-primary">Go Back</a>
   
    <h1>{{$post->title}}</h1>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
     <div>
         {!!$post->body!!}
     </div>
  @if (!Auth::guest())
      @if (Auth::user()->id == $post->user_id)
          
     
  
     <table style="width: 50%">
         
         <tr>
             <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
             <td>
                {!! Form::open(['action' => ['PostsController@destroy',$post->id],'method'=>'POST']) !!}
                           
                {{Form::hidden('_method','DELETE')}}
               {{Form::submit('Delete')}}
           
           
                {!! Form::close() !!}
             </td>
         </tr>
     </table>
     
     @endif
     @endif
    

    </div>
</div> 

@endsection



