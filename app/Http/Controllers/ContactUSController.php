<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUS;
use Mail;

class ContactUSController extends Controller
{
    public function contactUS()
    {
        return view('contactus');
    }
    public function contactUSPost(Request $request)
    {
        $this->validate($request, [
             'name' => 'required',
             'email' => 'required|email',
             'message' => 'required'
         ]);
         
        ContactUS::create($request->all());
        Mail::send('email',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message)
    {
        $message->from('jblogmsg@gmail.com');
        $message->to('dusejoffrey@gmail.com', 'Admin')->subject('Extend Feature Feedback');
    });
        return back()->with('success', 'Thanks for contacting us!');
    }
}
