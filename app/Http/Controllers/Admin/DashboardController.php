<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
class DashboardController extends Controller
{
    public function index()
    {
    	return view('admin.dashboard');
    }
     public function singlemessage($id)
    {
    $singlemessage = Contact::where('id',$id)->first();
    return view('layouts.admin.message',compact('singlemessage'));
    }

    public function moremessage()
    {
    	$allmessage=Contact::all();
    	return view('layouts.admin.all_message',compact('allmessage'));
    }
}
