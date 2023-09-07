<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile(){
        $user=Auth::user();
        return view('user.profile',['user'=>$user]);
    }
}
