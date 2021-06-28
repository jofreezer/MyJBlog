@extends('layouts.authornavbar')

@section('content')

<div class="row">
    <div class="col-8">
        <div style="text-align: center; color:rgb(228, 210, 177)" class="bg-secondary rounded-lg">
            <h1>We Can Build a Strong <br>  Community Together</h1>
            <hr>
        </div>  
        
       
        @if(count($posts) > 0)
        @foreach ($posts as $post)
        <div class="well">
            <div style="text-align: center ">
                {{-- <h3><a href="/posts/{{$post->id}}" style=" color:rgb(49, 49, 48)" class="text-decoration-none "> 
                    {{$post->title}}
                </a></h3> --}}

                <h2  style=" color:rgb(49, 49, 48)"> {{$post->title}}</h2>
            </div>  
           
            
            <p style=" color:rgb(70, 69, 68)">{{$post->body}}</p>
            
           
           <small> Posted By {{ $post->user->name}} on {{date('jS M Y',strtotime($post->created_at))}}</small>
        </div>
        <hr>
        @endforeach
        
        @else
        <p>No posts found</p>
        @endif
        <span>{{$posts->links("pagination::bootstrap-4")}}</span> 
    </div>
    <div class="col-4" id="sticky-sidebar ">
        <div class="sticky-top">
        <h1 style="  color:rgb(136, 136, 134)">Hi, I am Joffrey</h1>
        <img src='/img/joffrey.png' alt="jofreezer" width="300px" height="300px" class="rounded-lg">
      
        
    </div>
    </div>
   
</div>


      
        @endsection