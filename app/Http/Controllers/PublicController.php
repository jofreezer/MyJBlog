<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PublicController extends Controller
{
    public function index(){
        
        $posts= Post::all();
        return view('welcome')->with('posts',$posts);
        
        
    }
    public function contactus(){
        return view('contactus');
    }
    public function singlePost(){
        return view('singlePost');
    }
    // public function userInfo($userId){
    //     return "hi" . $userId;
    // }
    // public function displayPosts(){
    //      $posts = Post::all();
    //      return var_dump($posts);
       
    // }
}

