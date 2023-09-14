<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Revisor;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{



    public function store(Request $request){
        $revisor=new Revisor;

        $revisor->user_id=auth()->user()->id;
        $revisor->about_you=$request->about_you;
        $revisor->save();
        Mail::to('guri.sabah@icloud.com')->send(new BecomeRevisor(Auth::user()));
        session()->flash('message', [
            'title' => 'Candidatura inviata',
            'content' => "Grazie per aver mandato la tua candidatura.",
            'status' => 'success',
        ]);
        return redirect()->back();
    }

    public function makeRevisor(Request $request,User $user){
        Artisan::call('presto:makeUserRevisor',['email'=>$user->email]);
        session()->flash('message', [
            'title' => 'Revisore aggiunto',
            'content' => "Complimenti l'utente ora è revisore",
            'status' => 'success',
        ]);
        return redirect()->route('dashboard.users');
    }

    public function workWithUs(){
        return view('useful-links.work-whit-us');
    }

}
