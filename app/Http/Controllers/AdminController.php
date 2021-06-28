<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('checkRole:admin');
    }
    public function dashboard(){
        $posts= Post::all();
      
        return view('admin.dashboard')->with('posts',$posts);
    }
    public function show($id)
    {
        $post= Post::find($id);
        return view('posts.show ')->with('post',$post);
      
    }

    public function destroy($id)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);
        $post = Post::find($id);

        $post->title = $request->input('title');
        $post->body = $request->input('body');

        $post->save();

        return redirect('/admin/dashboard');
    }
  
    public function users(){
       
        return view('admin.users');
    }
    public function posts(){
        return view('admin.posts');
    }
    
}
