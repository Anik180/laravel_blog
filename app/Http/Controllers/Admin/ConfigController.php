<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Config;
use DB;
use Intervention\Image\Facades\Image;


class ConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        $config = Config::first();
        return view('admin.config.edit',compact('config'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
 
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
           $data=array();
           $data['about']=$request->about;
           $data['email']=$request->email;
           $data['facebook_url']=$request->facebook_url;
           $data['twitter_url']=$request->twitter_url;
           $data['linkedin_url']=$request->linkedin_url;
           $data['youtube_url']=$request->youtube_url;

         
           $old_logo=$request->old_logo;
           $old_fav_icon=$request->old_fav_icon;
 
           $logo=$request->logo;
           $fav_icon=$request->fav_icon;

           if($logo && $fav_icon){
            $logo_name=uniqid().'.'.$logo->getClientOriginalExtension();
            $fav_name=uniqid().'.'.$fav_icon->getClientOriginalExtension();

            Image::make($logo)->resize(1700,700)->save('public/uploads/'.$logo_name);
            Image::make($fav_icon)->resize(1700,700)->save('public/uploads/'.$fav_name);

            $data['logo']='public/uploads/'.$logo_name;
            $data['fav_icon']='public/uploads/'.$fav_name;

            DB::table('configs')->where('id',$id)->update($data);
            unlink($old_logo);
            unlink($old_fav_icon);

         $notification=array(
          'messege'=>'Successfully update',
           'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
           }
            $data['logo']=$old_logo;
            $data['fav_icon']=$old_fav_icon;

            DB::table('configs')->where('id',$id)->update($data);
            
            $notification=array(
            'messege'=>'Successfully update',
            'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
