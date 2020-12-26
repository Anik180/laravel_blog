<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::latest()->get();
        return view('admin.team.index',compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
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
            'name' => 'required',
            'image' => 'required',
            'designation' => 'required',
        ]);
         $image = $request->file('image');
        $slug = strtolower($request->name);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('team'))
            {
                Storage::disk('public')->makeDirectory('team');
            }


            Image::make($image)->resize(190,190)->save(storage_path('app/public/team').'/'.$imageName);

        } else {
            $imageName = NULL;
        }
        $team = new Team();
        $team->name = $request->name;
        $team->image = $imageName;
        $team->designation = $request->designation;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->email = $request->email;
        $team->linkedin = $request->linkedin;
        $team->instagran = $request->instagran;
        $team->phone = $request->phone;
        $team->save();
         $notification=array(
          'messege'=>'Successfully Save',
           'alert-type'=>'success'
             );
   return Redirect()->route('admin.teams.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
            $this->validate($request,[
            'name' => 'required',
            'image' => 'required',
            'designation' => 'required',
        ]);
         $image = $request->file('image');
        $slug = strtolower($request->name);
        if(isset($image))
        {
//            make unipue name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName  = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

            if(!Storage::disk('public')->exists('team'))
            {
                Storage::disk('public')->makeDirectory('team');
            }

            // $postImage = Image::make($image)->resize(750,450)->save();
            // Storage::disk('public')->put('post/'.$imageName,$postImage);
            //            delete old post image
            if(Storage::disk('public')->exists('team/'.$team->image))
            {
                Storage::disk('public')->delete('team/'.$team->image);
            }

            Image::make($image)->resize(190,190)->save(storage_path('app/public/team').'/'.$imageName);

        } else {
            $imageName = $team->image;
        }
        $team->name = $request->name;
        $team->image = $imageName;
        $team->designation = $request->designation;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->email = $request->email;
        $team->linkedin = $request->linkedin;
        $team->instagran = $request->instagran;
        $team->phone = $request->phone;
        $team->save();
         $notification=array(
          'messege'=>'Successfully Updated',
           'alert-type'=>'success'
             );
   return Redirect()->route('admin.teams.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        if (Storage::disk('public')->exists('team/'.$team->image))
        {
            Storage::disk('public')->delete('team/'.$team->image);
        }

        $team->delete();
        $notification=array(
          'messege'=>'Successfully delete',
           'alert-type'=>'success'
             );
         return Redirect()->back()->with($notification);
    }
}
