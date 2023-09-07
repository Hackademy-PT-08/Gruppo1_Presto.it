<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile(){
        $user=Auth::user();
        return view('user.profile',['user'=>$user]);
    }


    public function announcements(){
        $current_user_id=auth()->user()->id;
        $user_announcements=User::find($current_user_id)->announcements;
        return view('user.announcements',['user_announcements'=>$user_announcements]);
    }
}
