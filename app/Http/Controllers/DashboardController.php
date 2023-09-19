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
        $last_announcement,
        $logged_user,
        $last_announcement_accepted,
        $last_announcement_rejected;

    public function __construct(){
        $this->middleware(function ($request, $next) {
            $this->logged_user = Auth::user();

            $this->announcements_to_revised_count = Announcement::where('is_revised', false)->where('deleting', false)->where('user_id', '!=', $this->logged_user->id)->count();

            $last_announcement_accepted = Announcement::where('is_revised', true)->where('user_id', '!=', $this->logged_user->id)->latest('updated_at')->first();
            $last_announcement_rejected = Announcement::where('deleting', true)->where('user_id', '!=', $this->logged_user->id)->latest('updated_at')->first();

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

            return $next($request);
        });

        $this->requests_count = Revisor::all()->count();
        $this->revisors_count = User::all()->count();

    }

    public function announcements() {
        $announcements = Announcement::where('is_revised', false)->where('deleting', false)->where('user_id', '!=', $this->logged_user->id)->get();


        return view('dashboard.dashboard-announcements', [
            'announcements' => $announcements,
            'last_annoucement' => $this->last_announcement,
            'announcements_to_revised_count' => $this->announcements_to_revised_count,
            'requests_count' => $this->requests_count,
            'revisors_count' => $this->revisors_count,
        ]);
    }

    public function single($id) {
        $announcement = Announcement::find($id);

        return view('dashboard.dashboard-single', [
            'announcement' => $announcement,
            'announcements_to_revised_count' => $this->announcements_to_revised_count,
            'requests_count' => $this->requests_count,
            'revisors_count' => $this->revisors_count,]);
    }

    public function users() {
        $users = User::all();

        return view('dashboard.dashboard-users', [
            'users' => $users,
            'announcements_to_revised_count' => $this->announcements_to_revised_count,
            'requests_count' => $this->requests_count,
            'revisors_count' => $this->revisors_count,]);
    }

    public function user($id) {
        $user = User::find($id);
        $revisor = null;

        if($this->isRevisor($id))
            $revisor = Revisor::where('user_id', $id)->get();


        return view('dashboard.dashboard-user', [
            'user' => $user,
            'revisor' => $revisor,
            'announcements_to_revised_count' => $this->announcements_to_revised_count,
            'requests_count' => $this->requests_count,
            'revisors_count' => $this->revisors_count,]);
    }

    public function requests() {
        $revisors = Revisor::with('user')->get();

        return view('dashboard.dashboard-requests', [
            'revisors' => $revisors,
            'announcements_to_revised_count' => $this->announcements_to_revised_count,
            'requests_count' => $this->requests_count,
            'revisors_count' => $this->revisors_count,]);
    }

    public function acceptAnnouncement($id) {
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

    public function isRevisor($id) {
        if(!(Revisor::where('user_id', $id)->get()->isEmpty()))
            return true;
    }
}
