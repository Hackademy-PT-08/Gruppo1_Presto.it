<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{


    public function homepage(){

        $announcements=Announcement::latest()->take(6)->get();
        $random_announcements=Announcement::inRandomOrder()->where('is_revised',true)->take(3)->get();
        $revised_announcements= $announcements->where('is_revised',true);
        return view('homepage.homepage',compact('revised_announcements', 'random_announcements'));
    }


    public function SearchAnnouncements(Request $request){
        $announcements=Announcement::search($request->searched)->get();
        return view('announcements.index',compact('announcements'));

    }


}
