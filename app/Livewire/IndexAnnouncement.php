<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\DB;

class IndexAnnouncement extends Component
{
    public
        $announcements,
        $query_name,
        $query_category_id;


    public function mount() {
        $this->announcements = Announcement::with('category')->orderBy('created_at','desc')->get();
    }

    public function render()
    {
        return view('livewire.index-announcement');
    }

    public function reloadPosts() {
        $this->announcements = Announcement::query();

        if($this->query_category_id == "all")
            return $this->announcements = Announcement::with('category')->orderBy('created_at','desc')->get();
        if ($this->query_category_id) {
            $this->announcements = $this->announcements->where('category_id', $this->query_category_id)->orderBy('created_at','desc');
        }

        if ($this->query_name) {
            $name = $this->query_name;
            $this->announcements = $this->announcements->where('title', 'like', '%' . $this->query_name . '%')->orderBy('created_at','desc');
        }

        $this->announcements = $this->announcements->get();
    }

}
