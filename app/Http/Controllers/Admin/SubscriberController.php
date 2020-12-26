<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscriber;
use DB;
class SubscriberController extends Controller
{
    public function index()
    {
       $subscribers = Subscriber::latest()->get();
       return view('admin.subscriber',compact('subscribers'));
    }
    public function destroy($subscriber)
    {
    	$subscriber = Subscriber::findOrFail($subscriber)->delete();
    	 $notification=array(
           'messege'=>'Successfully Subscriber Deleted',
           'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }
    public function volunteer_request()
    {
      $volunteer_request=DB::table('volunteerjoins')->latest()->get();
      return view('admin.volunteer_request',compact('volunteer_request'));

    }
    public function delete($id)
    {
       DB::table('volunteerjoins')->where('id',$id)->delete();
       $notification=array(
          'messege'=>'Successfully Deleted',
           'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);
    }
}
