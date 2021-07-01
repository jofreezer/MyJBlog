@extends('layouts.authornavbar')

@section('content')
 
    <div class="row">
        
        <div class="  col-8">

     <a href="/posts/create" class="btn btn-primary">Create Post</a>
     <div style="text-align: center">
        <h3> {{$posts->count()}} Posts </h3>
        
     </div>
    </div>
    
    
   
        
   
     <table class="table table-striped col-8" style="width: 50%">
   
         <tr class="col-8 " >
   
             <th>Title</th>
             <th>Posts</th>
             <th></th>
         </tr>
         @if(count($posts) > 0)
                @foreach ($posts as $post)
        
             <tr role="row" style="width: 50%">
                
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



@endsection
