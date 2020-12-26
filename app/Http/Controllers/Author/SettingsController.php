<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
use App\User;
class SettingsController extends Controller
{
     public function index()
    {
        return view('author.settings');
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
        ]);
        $image = $request->file('image');
        $slug = strtolower($request->name);
        $user = User::findOrFail(Auth::id());
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
            if (!Storage::disk('public')->exists('uploads'))
            {
                Storage::disk('public')->makeDirectory('uploads');
            }
//            Delete old image form profile folder
            if (Storage::disk('public')->exists('uploads/'.$user->image))
            {
                Storage::disk('public')->delete('uploads/'.$user->image);
            }
            // $profile = Image::make($image)->resize(500,500)->save();
            // Storage::disk('public')->put('uploads/'.$imageName,$profile);
            Image::make($image)->resize(500,500)->save(storage_path('app/public/uploads').'/'.$imageName);
        } else {
            $imageName = $user->image;
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->image = $imageName;
        $user->about = $request->about;
        $user->save();
        $notification=array(
          'messege'=>'Successfully profile update',
           'alert-type'=>'success'
             );
        return Redirect()->back()->with($notification);
    }

    public function updatePassword(Request $request)
    {
        $this->validate($request,[
            'old_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        $hashedPassword = Auth::user()->password;
        if (Hash::check($request->old_password,$hashedPassword))
        {
            if (!Hash::check($request->password,$hashedPassword))
            {
                $user = User::find(Auth::id());
                $user->password = Hash::make($request->password);
                $user->save();
                $notification=array(
                'messege'=>'Password Successfully Changed',
                'alert-type'=>'success'
                 );
                Auth::logout();
                return Redirect()->back()->with($notification);
            } else {
           $notification=array(
          'messege'=>'New password cannot be the same as old password.',
           'alert-type'=>'error'
             );
            return Redirect()->back()->with($notification);
            }
        } else {
             $notification=array(
            'messege'=>'Current password not match.',
            'alert-type'=>'error'
             );
            return Redirect()->back()->with($notification);
        }

    }
}
