<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request,$post)
    {
       $validatedData = $request->validate([
        'comment' => 'required',
        
     ]);
        $comment = New Comment();
        $comment->user_id = Auth::id();
        $comment->post_id = $post;
        $comment->comment = $request->comment;

        $comment->save();

        $notification=array(
          'messege'=>'Successfully Comment Added',
           'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);
    }
}
