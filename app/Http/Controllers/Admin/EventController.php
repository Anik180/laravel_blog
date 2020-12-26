<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $event = Event::latest()->get();
        return view('admin.events.index',compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.create');
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
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
         $image = $request->file('image');
        $slug = strtolower($request->title);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('events'))
            {
                Storage::disk('public')->makeDirectory('events');
            }

            Image::make($image)->resize(750,450)->save(storage_path('app/public/events').'/'.$imageName);

        } else {
            $imageName = NULL;
        }
        $event = new Event();
        $event->title = $request->title;
        $event->slug = $slug;
        $event->image = $imageName;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->upcoming_event = $request->upcoming_event;
        $event->save();


         $notification=array(
          'messege'=>'Successfully Save',
           'alert-type'=>'success'
             );
   return Redirect()->route('admin.events.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('admin.events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {

        return view('admin.events.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
            $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
         $image = $request->file('image');
        $slug = strtolower($request->title);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('events'))
            {
                Storage::disk('public')->makeDirectory('events');
            }

            // $postImage = Image::make($image)->resize(750,450)->save();
            // Storage::disk('public')->put('post/'.$imageName,$postImage);
            //            delete old post image
            if(Storage::disk('public')->exists('events/'.$event->image))
            {
                Storage::disk('public')->delete('events/'.$event->image);
            }

            Image::make($image)->resize(750,450)->save(storage_path('app/public/events').'/'.$imageName);

        } else {
            $imageName = $event->image;
        }

        $event->title = $request->title;
        $event->slug = $slug;
        $event->image = $imageName;
        $event->description = $request->description;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->upcoming_event = $request->upcoming_event;


        $event->save();



         $notification=array(
          'messege'=>'Successfully Updated',
           'alert-type'=>'success'
             );
   return Redirect()->route('admin.events.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
       if (Storage::disk('public')->exists('events/'.$event->image))
        {
            Storage::disk('public')->delete('events/'.$event->image);
        }

        $event->delete();
        $notification=array(
          'messege'=>'Successfully delete',
           'alert-type'=>'success'
             );
         return Redirect()->back()->with($notification);
    }
}
