@extends('layouts.adminnavbar')

@section('content')
<div class="container">
<h1>Admin Page</h1> 

<h3>Users: {{\App\models\User::all()->count()}} </h3>
 
<h3>Users Name</h3>
{{-- {{\App\models\User::all()->count()}} --}}


<div>
    <a href="#" class="btn btn-primary">Add user</a>
    <div style="text-align: center">
  
    </div>
    @if(count($posts) > 0)

  
    <table class="table table-striped">
        <tr>
            <th>Names</th>
            <th>Emails</th>
            <th> posts</th>
        </tr>
        
        @foreach ($posts as $post)
            <tr>
               <td>{{ $post->user->name}} </td> 
               <td>{{ $post->user->email}}</td>
               <td>{{ $post->user->posts->count()}}</td>
               
               <td>
                   {!! Form::open(['action' => ['AdminController@destroy',$post->id],'method'=>'POST']) !!}
                          
                   {{Form::hidden('_method','DELETE')}}
                  {{Form::submit('Delete')}}
              
              
                   {!! Form::close() !!}
               </td>
            </tr>
            
        @endforeach
           </table>
           @else
           <p>you have no posts</p>
           @endif
</div>
</div>
  @endsection