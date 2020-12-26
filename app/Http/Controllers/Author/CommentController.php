<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;
class CommentController extends Controller
{
    
    public function index()
    {
        $posts = Auth::user()->posts;
        return view('author.comments',compact('posts'));
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        if ($comment->post->user->id == Auth::id())
        {
            $comment->delete();
           $notification=array(
          'messege'=>'Comment Successfully Deleted',
           'alert-type'=>'success'
             ); 
        } else {
           $notification=array(
          'messege'=>'You are not authorized to delete this comment :(','Access Denied !!!',
           'alert-type'=>'error'
             );        
        }
        return Redirect()->back()->with($notification);
    }
}
