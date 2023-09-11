<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Announcement;
use Illuminate\Http\Request;

class DashboardController extends Controller
{


    public function announcements() {
        $announcements = Announcement::all();

        return view('dashboard.dashboard-announcements', ['user_announcements' => $announcements]);
    }

    public function single($id) {
        $announcement = Announcement::find($id);

        return view('dashboard.dashboard-single', ['announcement' => $announcement]);
    }

    public function redirectToAnnouncements() {
        return redirect()->route('dashboard.announcements');
    }

    public function users() {
        $users = User::all();

        return view('dashboard.dashboard-users', ['users' => $users]);
    }

    public function user($id) {
        $user = User::find($id);

        return view('dashboard.dashboard-user', ['user' => $user]);
    }

    public function requests() {
        $users = User::all();

        return view('dashboard.dashboard-requests', ['users' => $users]);
    }
}
