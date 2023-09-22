<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Jobs\ResizeImage;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public
        $user_annoucements_count,
        $user;

    public function __construct(){
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();

            $this->user_announcements_count = Announcement::where('user_id', $this->user->id)->where('is_revised', true)->where('deleting', false)->count();

            return $next($request);
        });

    }


    public function profile(){
        return view('user.profile',[
            'user' => $this->user,
            'user_announcements_count' => $this->user_announcements_count,]);
    }


    public function announcements(){
        $user_announcements = Announcement::where('user_id', $this->user->id)->where('is_revised', true)->where('deleting', false)->get();
        
        return view('user.profile-announcements',[
            'user_announcements' => $user_announcements,
            'user_announcements_count' => $this->user_announcements_count,
        ]);
    }

    // public function updateProfileImage(Request $request){
    //     $newFileName="user/{$this->user->id}";
        
    //     $uploadedImage=$request->file('profile_image');
        
    //     $path=$uploadedImage->store($newFileName,'public');

    //     $newImage=$this->user->image()->create(['path'=>$path]);
        
        
    //     dispatch(new ResizeImage($newImage->path,200,200));


        
    //     return redirect()->back();
    
    // }
}
