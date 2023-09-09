<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;

class UpdateAnnouncement extends Component
{
    public
        $title,
        $description,
        $price,
        $category,
        $old_announcement,
        $announcements,
        $announcement_id,
        $announcementToUpdate;

    public function mount(){
        $this->old_announcement = Announcement::find($this->announcement_id);
        $this->announcements = Announcement::find($this->announcement_id);
        $this->announcementToUpdate=Announcement::find($this->announcement_id);
        $this->title=$this->announcementToUpdate->title;
        $this->description=$this->announcementToUpdate->description;
        $this->price=$this->announcementToUpdate->price;
        $this->category=$this->announcementToUpdate->category_id;

    }

    public function rules() {
        return [
            'title' => 'required|min:5',
            'description' => 'required|min:10',
            'price' => 'required|numeric',
            'category' => 'required',
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
            'category.required' => 'Questo campo è obbligatorio',
        ];
    }

    public function render()
    {
        return view('livewire.update-announcement',['announcement'=>$this->old_announcement]);
    }

    public function update(){

        $this->validate();

        $announcement=Announcement::find($this->announcement_id);

        if ($announcement->category_id!= $this->category) {
            $announcement->category()->dissociate();//* elimino la categoria che messa in precedenza
            $announcement->category()->associate($this->category);//* aggiungo la nuova categoria
        }

        $announcement->title=$this->title;
        $announcement->description=$this->description;
        $announcement->price=$this->price;
        $announcement->save();


        session()->flash('message', [
            'title' => 'Annuncio aggiornato con successo',
            'content' => 'Il tuo annuncio riguardante '. $this->title .' è stato aggiornato con successo',
            'status' => 'success',
        ]);

        return redirect()->route('announcements.edit',$this->announcement_id);
    }


    public function destroy()
    {
        $announcement=Announcement::find($this->announcement_id);
        $announcement->delete();

        session()->flash('message', [
            'title' => 'Annuncio eliminato con successo',
            'content' => 'Il tuo annuncio riguardante '. $this->title .' è stato eliminato con successo',
            'status' => 'deleted',
        ]);

        return redirect()->route('announcements.index');
    }
}
