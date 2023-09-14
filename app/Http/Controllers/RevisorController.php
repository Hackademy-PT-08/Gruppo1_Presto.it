<?php

namespace App\Http\Controllers;

use App\Models\Revisor;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function becomeRevisor(Request $request){
        Mail::to('guri.sabah@icloud.com')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back();
    }


    public function store(Request $request){
        $revisor=new Revisor;

        $revisor->user_id=auth()->user()->id;
        $revisor->about_you=$request->about_you;
        $revisor->save();
        session()->flash('message', [
            'title' => 'Candidatura inviata',
            'content' => "Grazie per aver mandato la tua candidatura.",
            'status' => 'success',
        ]);
        return redirect()->back();
    }

}
