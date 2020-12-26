<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Member::latest()->get();
        return view('admin.member.index',compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.member.create');
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
        ]);
         $image = $request->file('image');
        $slug = strtolower($request->title);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('member'))
            {
                Storage::disk('public')->makeDirectory('member');
            }


            Image::make($image)->resize(90,90)->save(storage_path('app/public/member').'/'.$imageName);

        } else {
            $imageName = NULL;
        }
        $team = new Member();
        $team->title = $request->title;
        $team->short_title = $request->short_title;
        $team->image = $imageName;

        $team->save();
         $notification=array(
          'messege'=>'Successfully Save',
           'alert-type'=>'success'
             );
   return Redirect()->route('admin.members.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit(Member $member)
    {
        return view('admin.member.edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $member)
    {
            $this->validate($request,[
            'title' => 'required',
        ]);
        $image = $request->file('image');
        $slug = strtolower($request->title);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('member'))
            {
                Storage::disk('public')->makeDirectory('member');
            }

            // $postImage = Image::make($image)->resize(750,450)->save();
            // Storage::disk('public')->put('post/'.$imageName,$postImage);
            //            delete old post image
            if(Storage::disk('public')->exists('member/'.$member->image))
            {
                Storage::disk('public')->delete('member/'.$member->image);
            }

            Image::make($image)->resize(190,190)->save(storage_path('app/public/member').'/'.$imageName);

        } else {
            $imageName = $member->image;
        }
        $member->title = $request->title;
        $member->short_title = $request->short_title;
        $member->image = $imageName;
        $member->save();
         $notification=array(
          'messege'=>'Successfully Updated',
           'alert-type'=>'success'
             );
   return Redirect()->route('admin.members.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
      if (Storage::disk('public')->exists('member/'.$member->image))
        {
            Storage::disk('public')->delete('member/'.$member->image);
        }

        $member->delete();
        $notification=array(
          'messege'=>'Successfully delete',
           'alert-type'=>'success'
             );
         return Redirect()->back()->with($notification);
    }
}
