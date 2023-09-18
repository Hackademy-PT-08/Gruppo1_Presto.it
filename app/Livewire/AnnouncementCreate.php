<?php

namespace App\Livewire;

use App\Models\Image;
use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\WithFileUploads;

class AnnouncementCreate extends Component
{
    use WithFileUploads;
    public $title,$description,$price,$category,$temporary_images,$images=[];


    public function rules() {
        return [
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'price' => 'required|numeric',
            'category' => 'required',
            'images.*'=>"image|max:1024",
            'temporary_images.*'=>'image|max:1024'
        ];
    }
    public function messages() {
        return [
            'title.required' => 'Questo campo è obbligatorio',
            'title.min' => 'Questo campo deve avere almeno 8 caratteri',
            'description.required' => 'Questo campo è obbligatorio',
            'description.min' => 'Questo campo deve avere almeno 8 caratteri',
            'price.required' => 'Questo campo è obbligatorio',
            'price.numeric' => 'Questo campo deve essere un numero',
            'category.required' => 'Questo campo è obbligatorio',
            'temporary_images.*.image'=>'Devi inserire un file di tipo immagine',
            'temporary_images.*.max'=>'La dimensione dell\'immagine inserita supera il limite consetito di 1mb',
        ];
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate(['temporary_images.*'=>'image|max:1024'])) {
            foreach ($this->temporary_images as $image) {
                $this->images[]=$image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key,array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }



    public function store()
    {
        $this->validate();

        $announcement = new Announcement;
        $announcement->title=$this->title;
        $announcement->description=$this->description;
        $announcement->price=$this->price;
        $announcement->user_id=auth()->user()->id;
        $announcement->category_id=$this->category;
        $announcement->save();

        foreach ($this->images as $image) {
            
           $newFileName="announcements/{$announcement->id}";
           $path=$image->store($newFileName,'public');
           $newImage=$announcement->images()->create(['path'=>$path]);
           

        }


        session()->flash('message', [
            'title' => 'Annuncio in attesa di approvazione',
            'content' => 'Il tuo annuncio riguardante '. $this->title .' è stato mandato ad un revisore',
            'status' => 'success',
        ]);

        return redirect()->route('announcements.index');
    }

    public function render()
    {
        return view('livewire.announcement-create');
    }
}