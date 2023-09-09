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
        return view('announcements.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('announcements.create');
    }



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


        return view('announcements.edit',['announcement'=>$announcement,'categories'=>$categories]);
    }


    public function searchByCategory($categoryId){
        $categoryToSearch=Category::find($categoryId);
        $announcements=$categoryToSearch->announcements()->get();

        return view('announcements.searchByCategory',['categoryToSearch'=>$categoryToSearch,'announcements'=>$announcements]);
    }




}

