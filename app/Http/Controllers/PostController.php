<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
class PostController extends Controller
{
    public function singlepost($slug)
    {
       $singlepost = Post::where('slug',$slug)->approved()->published()->first();
       return view('singlepost',compact('singlepost'));
    }

    public function postcategory($slug)
    {
    	  $categorypost = Category::where('slug',$slug)->first();
          $posts = $categorypost->posts()->approved()->published()->get();
          return view('category',compact('categorypost','posts'));
    }  
    public function posttag($slug)
    {
    	 $tagpost = Tag::where('slug',$slug)->first();
         $posts = $tagpost->posts()->approved()->published()->get();
    	return view('tag',compact('tagpost','posts'));

    } 
}
