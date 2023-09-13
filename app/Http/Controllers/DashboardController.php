<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    protected
        $announcements_to_revised_count,
        $requests_count,
        $users_count;

    public function __construct(){
        $this->announcements_to_revised_count = Announcement::where('is_revised', false)->count();
        $this->requests_count = User::where('is_asking_reviewer', true)->count();
        $this->users_count = User::all()->count();
    }

    public function announcements() {
        if(!($this->userIsReviewer() || $this->userIsAdmin()))
            return redirect()->route('homepage');

        $announcements = Announcement::where('is_revised', false)->where('deleting', false)->get();
        $last_announcement = Announcement::where('is_revised', false)->latest('updated_at')->first();
        

        return view('dashboard.dashboard-announcements', [
            'announcements' => $announcements,
            'last_annoucement' => $last_announcement,
            'announcements_to_revised_count' => $this->announcements_to_revised_count,
            'requests_count' => $this->requests_count,
            'users_count' => $this->users_count,
        ]);
    }

    public function single($id) {
        if(!($this->userIsReviewer() || $this->userIsAdmin()))
            return redirect()->route('homepage');

        $announcement = Announcement::find($id);

        return view('dashboard.dashboard-single', [
            'announcement' => $announcement,
            'announcements_to_revised_count' => $this->announcements_to_revised_count,
            'requests_count' => $this->requests_count,
            'users_count' => $this->users_count,]);
    }

    public function users() {
        if(!$this->userIsAdmin())
            return redirect()->route('homepage');

        $users = User::all();

        return view('dashboard.dashboard-users', [
            'users' => $users,
            'announcements_to_revised_count' => $this->announcements_to_revised_count,
            'requests_count' => $this->requests_count,
            'users_count' => $this->users_count,]);
    }

    public function user($id) {
        if(!$this->userIsAdmin())
            return redirect()->route('homepage');

        $user = User::find($id);

        return view('dashboard.dashboard-user', [
            'user' => $user,
            'announcements_to_revised_count' => $this->announcements_to_revised_count,
            'requests_count' => $this->requests_count,
            'users_count' => $this->users_count,]);
    }

    public function requests() {
        if(!$this->userIsAdmin())
            return redirect()->route('homepage');

        $users = User::where('is_asking_reviewer', true)->get();

        return view('dashboard.dashboard-requests', [
            'users' => $users,
            'announcements_to_revised_count' => $this->announcements_to_revised_count,
            'requests_count' => $this->requests_count,
            'users_count' => $this->users_count,]);
    }

    public function acceptAnnouncement($id) {
        if(!($this->userIsReviewer() || $this->userIsAdmin()))
            return redirect()->route('homepage');

        $announcement = Announcement::find($id);

        $announcement->is_revised = true;
        $announcement->save();

        session()->flash('message', [
            'title' => 'Annuncio accettato',
            'content' => $announcement->title . ' ora fa parte degli annunci!',
            'status' => 'success',
        ]);

        return redirect()->route('dashboard.announcements');
    }

    public function rejectAnnouncement($id) {
        if(!($this->userIsReviewer() || $this->userIsAdmin()))
            return redirect()->route('homepage');

        $announcement = Announcement::find($id);

        $announcement->deleting = true;
        $announcement->save();

        session()->flash('message', [
            'title' => 'Annuncio rifiutato',
            'content' => $announcement->title . ' ora fa parte degli annunci!',
            'status' => 'deleted',
        ]);

        return redirect()->route('dashboard.announcements');
    }

    public function cancelLastReject() {
        $announcement = Announcement::latest('updated_at')->first();

        $announcement->deleting = false;
        $announcement->save();

        session()->flash('message', [
            'title' => 'Azione annullata',
            'content' => $announcement->title . ' ora può essere revisionato di nuovo!',
            'status' => 'success',
        ]);

        return redirect()->route('dashboard.announcements');
    }

    public function acceptReviewer($id) {
        if(!$this->userIsAdmin())
            return redirect()->route('homepage');

        $user = User::find($id);

        $user->is_reviewer = true;
        $user->is_asking_reviewer = false;
        $user->save();

        session()->flash('message', [
            'title' => 'Revisore accettato',
            'content' => $user->name . ' ora fa parte dei revisori!',
            'status' => 'success',
        ]);

        return redirect()->route('dashboard.requests');
    }

    public function rejectReviewer($id) {
        if(!$this->userIsAdmin())
            return redirect()->route('homepage');

        $user = User::find($id);

        $user->is_asking_reviewer = false;
        $user->save();

        session()->flash('message', [
            'title' => 'Revisore rifiutato',
            'content' => $user->name . ' continuerà ad essere un normale utente!',
            'status' => 'deleted',
        ]);

        return redirect()->route('dashboard.requests');
    }

    public function redirectToAnnouncements() {
        return redirect()->route('dashboard.announcements');
    }

    public function userIsAdmin() {
        if(Auth::user()->is_admin)
            return true;
    }

    public function userIsReviewer() {
        if(Auth::user()->is_reviewer)
            return true;
    }
}
