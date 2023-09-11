<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    
    
    public function homepage(){

        $announcements=Announcement::latest()->take(6)->get();
        return view('homepage.homepage',compact('announcements'));
    }


    public function SearchAnnouncements(Request $request){
        $announcements=Announcement::search($request->searched);
        return view('announcements.index',compact('announcements'));
    }
    
}
