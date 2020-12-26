<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Image;
use App\Slider;


use Carbon\Carbon;
class HomeController extends Controller
{
       public function editconfig()
    {
     $config=DB::table('configs')->first();    
     return view('admin.config.edit',compact('config'));
    }
    public function Update(Request $request,$id)
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

            Image::make($logo)->resize(450,70)->save('uploads/'.$logo_name);
            Image::make($fav_icon)->resize(70,70)->save('uploads/'.$fav_name);

            $data['logo']='uploads/'.$logo_name;
            $data['fav_icon']='uploads/'.$fav_name;

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

    public function index()
    {
      $slider = Slider::all();
      return view ('admin.slider.index',compact('slider'));
    }

    public function create()
    {
      return view('admin.slider.create');
    }

    public function store(Request $request)
    {     
     //  $validatedData = $request->validate([
     //    'project_title' => 'required',
     //    'description' => 'required',
     // ]);

         $data=array();
         $image=$request->slider;

         if($image){
          $slider_name=uniqid().'.'.$image->getClientOriginalExtension();

          Image::make($image)->resize(1700,700)->save('uploads/'.$slider_name);

          $data['slider']='uploads/'.$slider_name;

          DB::table('sliders')->insert($data);
       $notification=array(
          'messege'=>'Successfully Save',
           'alert-type'=>'success'
             );
          return Redirect()->back()->with($notification);
         }else{
          return Redirect()->back();
         }
    }

    public function edit($id)
    {
       $slider=DB::table('sliders')->where('id',$id)->first();
       return view('admin.slider.edit',compact('slider'));
    }

    public function updateslider(Request $request,$id)
    {
           $data=array();

        
           $old_slider=$request->old_slider;
 
           $slider=$request->slider;

           if($slider ){
            $slider_name=uniqid().'.'.$slider->getClientOriginalExtension();


            Image::make($slider)->resize(1800,600)->save('uploads/'.$slider_name);


            $data['slider']='uploads/'.$slider_name;
    

            DB::table('sliders')->where('id',$id)->update($data);
            unlink($old_slider);


         $notification=array(
          'messege'=>'Successfully update',
           'alert-type'=>'success'
             );
            return Redirect()->route('admin.sliders.index')->with($notification);
           }
            $data['slider']=$old_slider;


            DB::table('sliders')->where('id',$id)->update($data);
            
            $notification=array(
            'messege'=>'Successfully update',
            'alert-type'=>'success'
             );
            return Redirect()->route('admin.sliders.index')->with($notification);
    }

    public function destroy($id)
    {
    $slider=DB::table("sliders")->where('id',$id)->first();
    unlink($slider->slider);

    DB::table("sliders")->where('id',$id)->delete();
     $notification=array(
          'messege'=>'Successfully Delete',
           'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
    }
}
