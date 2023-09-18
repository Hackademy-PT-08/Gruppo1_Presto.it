<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{


    public function homepage(){

        
        $random_announcements=Announcement::inRandomOrder()->where('is_revised',true)->take(3)->get();
        $revised_announcements=Announcement::latest()->take(6)->where('is_revised',true)->get();
        return view('homepage.homepage',compact('revised_announcements', 'random_announcements'));
    }





}
