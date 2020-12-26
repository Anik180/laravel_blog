<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comment;
class CommentController extends Controller
{
    public function index()
    {
    $comments = Comment::latest()->get();
    return view('admin.comments',compact('comments'));
    }

    public function destroy($id)
    {
        Comment::findOrFail($id)->delete();
        $notification=array(
          'messege'=>'Comment Successfully Deleted',
           'alert-type'=>'success'
             );
        return Redirect()->back()->with($notification);
    }
}
