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
        $announcements=Announcement::all();
        return view('announcements.index',compact('announcements'));
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


        return view('announcements.edit',['announcement_id'=>$id]);
    }


    public function searchByCategory($categoryId){
        $categoryToSearch=Category::find($categoryId);
        $announcements=$categoryToSearch->announcements()->get();

        return view('announcements.searchByCategory',['categoryToSearch'=>$categoryToSearch,'announcements'=>$announcements]);
    }


    public function filterbar(Request $request){
       
        $query=Announcement::query();
        if ($request->filled('searched')) {
            $query->where('title','like','%'. $request->input('searched') . '%');
        }

        if ($request->filled('category')) {
        $query->where('category_id',$request->input('category'));
        }

        if ($request->filled('min_price')) {
            $query->where('price','>',$request->input('min_price'));
        }

        if ($request->filled('max_price')) {
            $query->where('price','<',$request->input('max_price'));
        }

        $announcements=$query->get();
        return view('announcements.index', compact('announcements'));
    }




}

