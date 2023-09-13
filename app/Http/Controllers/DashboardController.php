<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Revisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    protected
        $announcements_to_revised_count,
        $requests_count,
        $revisors_count,
        $last_announcement;

    public function __construct(){
        $this->announcements_to_revised_count = Announcement::where('is_revised', false)->where('deleting', false)->count();
        $this->requests_count = Revisor::all()->count();
        $this->revisors_count = User::all()->count();

        $last_announcement_accepted = Announcement::where('is_revised', true)->latest('updated_at')->first();
        $last_announcement_rejected = Announcement::where('deleting', true)->latest('updated_at')->first();

        if(isset($last_announcement_accepted) && isset($last_announcement_rejected)){
            if($last_announcement_accepted->updated_at < $last_announcement_rejected->updated_at){
                $this->last_announcement = $last_announcement_rejected;
            }
        }
        elseif(isset($last_announcement_rejected)){
            $this->last_announcement = $last_announcement_rejected;
        }
        else{
            $this->last_announcement = $last_announcement_accepted;
        }

    }

    public function announcements() {
        if(!($this->userIsReviewer() || $this->userIsAdmin()))
            return redirect()->route('homepage');

        $announcements = Announcement::where('is_revised', false)->where('deleting', false)->get();


        return view('dashboard.dashboard-announcements', [
            'announcements' => $announcements,
            'last_annoucement' => $this->last_announcement,
            'announcements_to_revised_count' => $this->announcements_to_revised_count,
            'requests_count' => $this->requests_count,
            'revisors_count' => $this->revisors_count,
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
            'revisors_count' => $this->revisors_count,]);
    }

    public function users() {
        if(!$this->userIsAdmin())
            return redirect()->route('homepage');

        $users = User::all();

        return view('dashboard.dashboard-users', [
            'users' => $users,
            'announcements_to_revised_count' => $this->announcements_to_revised_count,
            'requests_count' => $this->requests_count,
            'revisors_count' => $this->revisors_count,]);
    }

    public function user($id) {
        if(!$this->userIsAdmin())
            return redirect()->route('homepage');

        $user = User::find($id);


        $is_revisor = false;
        if($this->isRevisor($id))
            $is_revisor = true;



        return view('dashboard.dashboard-user', [
            'user' => $user,
            'is_revisor' => $is_revisor,
            'announcements_to_revised_count' => $this->announcements_to_revised_count,
            'requests_count' => $this->requests_count,
            'revisors_count' => $this->revisors_count,]);
    }

    public function requests() {
        if(!$this->userIsAdmin())
            return redirect()->route('homepage');



        $revisors = Revisor::with('user')->get();

        return view('dashboard.dashboard-requests', [
            'revisors' => $revisors,
            'announcements_to_revised_count' => $this->announcements_to_revised_count,
            'requests_count' => $this->requests_count,
            'revisors_count' => $this->revisors_count,]);
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
        $this->last_announcement->deleting = false;
        $this->last_announcement->is_revised = false;
        $this->last_announcement->save();

        session()->flash('message', [
            'title' => 'Azione annullata',
            'content' => $this->last_announcement->title . ' ora può essere revisionato di nuovo!',
            'status' => 'success',
        ]);

        return redirect()->route('dashboard.announcements');
    }

    public function acceptReviewer($id) {
        if(!$this->userIsAdmin())
            return redirect()->route('homepage');

        $user = User::find($id);

        $user->is_reviewer = true;
        $user->save();

        $revisor = Revisor::where('user_id', $id)->delete();

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

        $revisor = Revisor::where('user_id', $id)->delete();

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

    public function isRevisor($id) {
        if(!(Revisor::where('user_id', $id)->get()->isEmpty()))
            return true;
    }
}
