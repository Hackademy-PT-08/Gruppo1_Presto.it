<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Announcement;

class AnnouncementCreate extends Component
{
    public $title,$description,$price;

    public function render()
    {
        return view('livewire.announcement-create');
    }

    public function store()
    {
        $announcement= new Announcement;
        $announcement->title=$this->title;
        $announcement->description=$this->description;
        $announcement->price=$this->price;
        $announcement->save();

        return redirect()->route('annoucements.index');


    }
}
