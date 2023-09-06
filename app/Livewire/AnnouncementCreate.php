<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;

class AnnouncementCreate extends Component
{
    public $title,$description,$price,$category;

    public function rules() {
        return [
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'price' => 'required|numeric',
        ];
    }
    public function messages() {
        return [
            'title.required' => 'Questo campo è obbligatorio',
            'title.min' => 'Questo campo è troppo corto',
            'description.required' => 'Questo campo è obbligatorio',
            'description.min' => 'Questo campo è troppo corto',
            'price.required' => 'Questo campo è obbligatorio',
            'price.numeric' => 'Questo campo deve essere un numero',
        ];
    }

    public function render()
    {
        $categories=Category::all();
        return view('livewire.announcement-create',['categories'=>$categories]);
    }

    public function store()
    {
        $this->validate();

        $announcement= new Announcement;
        $announcement->title=$this->title;
        $announcement->description=$this->description;
        $announcement->price=$this->price;
        $announcement->user_id=auth()->user()->id;
        $announcement->category_id=$this->category;
        $announcement->save();

        return redirect()->route('annoucements.index');
    }
}
