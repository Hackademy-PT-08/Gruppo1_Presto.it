<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $announcements = Announcement::with('category')->orderBy('created_at','desc')->get();

        return view('announcements.index', ['announcements' => $announcements]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories=Category::all();
        return view('announcements.create',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $announcement = Announcement::find($id);

        return view('announcements.single', ['announcement' => $announcement]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $announcement=Announcement::find($id);

        if(!Auth::user() || Auth::user()->id != $announcement->user_id) {
            return redirect()->route('announcements.single', ['id' => $id]);
        }

        $categories=Category::all();

        return view('announcements.edit',['announcement'=>$announcement,'categories'=>$categories]);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Announcement $announcement)
    {
        //
    }
}

