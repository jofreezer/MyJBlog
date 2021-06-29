@extends('layouts.authornavbar')

@section('content')
<div class="container">
 

 <div>
     <a href="/posts/create" class="btn btn-primary">Create Post</a>
     <div style="text-align: center">
        <h3> {{$posts->count()}} Posts </h3>
        
     </div>
     @if(count($posts) > 0)

   
     <table class="table table-striped">
         <tr>
             <th>Title</th>
             <th>Posts</th>
             <th></th>
         </tr>
         
         @foreach ($posts as $post)
             <tr>
                <td>{{$post->title}} </td> 
                <td>{!!$post->body!!}</td>
                <td><a href="/posts/{{$post->id}}/edit">Edit</a></td>
                <td>
                    {!! Form::open(['action' => ['PostsController@destroy',$post->id],'method'=>'POST']) !!}
                           
                    {{Form::hidden('_method','DELETE')}}
                   {{Form::submit('Delete')}}
               
               
                    {!! Form::close() !!}
                </td>
             </tr>
             {{ $post->user->name}}
         @endforeach
            </table>
            @else
            <p>you have no posts</p>
            @endif
 </div>
</div>
@endsection
