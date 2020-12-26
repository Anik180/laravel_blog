<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
// use App\Notifications\AuthorPostApproved;
// use App\Notifications\NewPostNotify;
// use App\Subscriber;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()->get();
        return view('admin.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'image' => 'required',
            'categories' => 'required',
            'tags' => 'required',
            'description' => 'required',
        ]);
         $image = $request->file('image');
        $slug = strtolower($request->title);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('post'))
            {
                Storage::disk('public')->makeDirectory('post');
            }

            // $postImage = Image::make($image)->resize(750,450)->save();
            // Storage::disk('public')->put('post/'.$imageName,$postImage);


            Image::make($image)->resize(750,450)->save(storage_path('app/public/post').'/'.$imageName);

        } else {
            $imageName = NULL;
        }
        $post = new Post();
        $post->user_id = Auth::id();
        $post->category_id = implode($request->categories);
        $post->title = $request->title;
        $post->slug = $slug;
        $post->image = $imageName;
        $post->description = $request->description;
        if(isset($request->status))
        {
            $post->status = true;
        }else {
            $post->status = false;
        }
        $post->is_approved = true;
        $post->save();

        $post->categories()->attach($request->categories);
        $post->tags()->attach($request->tags);

        // $subscribers = Subscriber::all();
        // foreach ($subscribers as $subscriber)
        // {
        //     Notification::route('mail',$subscriber->email)
        //         ->notify(new NewPostNotify($post));
        // }



         $notification=array(
          'messege'=>'Successfully Save',
           'alert-type'=>'success'
             );
   return Redirect()->route('admin.post.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('admin.post.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.post.edit',compact('post','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
           $this->validate($request,[
            'title' => 'required',
            'categories' => 'required',
            'tags' => 'required',
            'description' => 'required',
        ]);
         $image = $request->file('image');
        $slug = strtolower($request->title);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('post'))
            {
                Storage::disk('public')->makeDirectory('post');
            }

            // $postImage = Image::make($image)->resize(750,450)->save();
            // Storage::disk('public')->put('post/'.$imageName,$postImage);
            //            delete old post image
            if(Storage::disk('public')->exists('post/'.$post->image))
            {
                Storage::disk('public')->delete('post/'.$post->image);
            }

            Image::make($image)->resize(750,450)->save(storage_path('app/public/post').'/'.$imageName);

        } else {
            $imageName = $post->image;
        }
        $post->user_id = Auth::id();
        $post->title = $request->title;
        $post->slug = $slug;
        $post->image = $imageName;
        $post->description = $request->description;
        if(isset($request->status))
        {
            $post->status = true;
        }else {
            $post->status = false;
        }
        $post->is_approved = true;
        $post->save();

        $post->categories()->sync($request->categories);
        $post->tags()->sync($request->tags);

        // $subscribers = Subscriber::all();
        // foreach ($subscribers as $subscriber)
        // {
        //     Notification::route('mail',$subscriber->email)
        //         ->notify(new NewPostNotify($post));
        // }



         $notification=array(
          'messege'=>'Successfully Updated',
           'alert-type'=>'success'
             );
   return Redirect()->route('admin.post.index')->with($notification);
    }

    public function pending()
    {
        $posts = Post::where('is_approved',false)->get();
        return view ('admin.post.pending',compact('posts'));
    }

    public function approve($id)
    {
      $post = Post::find($id);
      if($post->is_approved == false)
      {
         $post->is_approved = true;
         $post->save();
        $notification=array(
           'messege'=>'Post Successfully Approved',
           'alert-type'=>'success'
             );
         return Redirect()->back()->with($notification);
      } else{
        $notification=array(
           'messege'=>'The post is already approved',
           'alert-type'=>'info'
             );
         return Redirect()->back()->with($notification);

      }
      return Redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
         if (Storage::disk('public')->exists('post/'.$post->image))
        {
            Storage::disk('public')->delete('post/'.$post->image);
        }
        $post->categories()->detach();
        $post->tags()->detach();
        $post->delete();
        $notification=array(
          'messege'=>'Successfully Updated',
           'alert-type'=>'success'
             );
         return Redirect()->back()->with($notification);
    }
}
