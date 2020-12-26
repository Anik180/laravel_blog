<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subscriber;
use App\Category;
use App\Post;
use DB;
use Image;
use App\Event;
use App\About;
use App\Team;
use App\Contact;
use App\Volunteer;
use App\Volunteerjoin;
use App\Member;
class FrontController extends Controller
{
    public function store(Request $request)
    {
    	$this->validate($request,[
        'email' => 'required|email|unique:subscribers',
        ]);

        $subscriber = New Subscriber();
        $subscriber->email = $request->email;
        $subscriber->save();
         $notification=array(
           'messege'=>'You Successfully added to our subscriber list',
           'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);


    }
    public function index()
    { 
    	$categories = Category::all();
    	return view('welcome',compact('categories'));
    }

    public function past_events()
    {
        $past_events = Event::where('upcoming_event',NULL)->get();
        return view('past_event',compact('past_events'));
    }

    public function singlepast($slug)
    {
       // $singlepast = Event::where('slug',$slug)->where('upcoming_event',NULL)->first();
        $singlepast=DB::table('events')->where('slug',$slug)->first();
       return view('single_past',compact('singlepast'));
    }

    public function upcoming_events()
    {
        $events = Event::where('upcoming_event',1)->get();
        return view('events',compact('events')); 
    }
    public function singleevents($slug)
{
        $singleevents=DB::table('events')->where('slug',$slug)->first();
       return view('single_event',compact('singleevents'));
}
    public function about()
    {
        $about=DB::table('abouts')->first();
        return view('about',compact('about'));
    }    
    public function volunteer()
    {
        $volunteer=DB::table('volunteers')->first();
        return view('volunteer',compact('volunteer'));
    }    
    public function member_zone()
    {
        $member=DB::table('members')->latest()->get();
        return view('member',compact('member'));
    }

    public function team()
    {
        $team=Team::get();
        return view('team',compact('team'));
    }

    public function contactus()
    {
        return view('contact_us');
    }

    public function storemessage(Request $request)
    {
        $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'message' => 'required',
        
     ]);
        $contact = New Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();

        $notification=array(
          'messege'=>'Successfully Message Send',
           'alert-type'=>'success'
             );
   return Redirect()->back()->with($notification);
    }    
    public function storevoulnteer(Request $request)
    {
        $validatedData = $request->validate([
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
        'are_you_member' => 'required',
        
     ]);
        $voulnteer = New Volunteerjoin();
        $voulnteer->name = $request->name;
        $voulnteer->email = $request->email;
        $voulnteer->phone = $request->phone;
        $voulnteer->company = $request->company;
        $voulnteer->are_you_member = $request->are_you_member;

        $voulnteer->save();

        $notification=array(
          'messege'=>'Successfully send join request',
           'alert-type'=>'success'
             );
   return view('pending')->with($notification);
    }
    
}
