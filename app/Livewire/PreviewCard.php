<?php

namespace App\Livewire;

use Livewire\Component;

class PreviewCard extends Component
{
    public $previewTitle='titolo';
    public$previewPrice=0;
    public $previewCategory='';
    public function render()
    {
        return view('livewire.preview-card',['previewTitle'=>$this->previewTitle,'previewPrice'=>$this->previewPrice,'previewCategory'=>$this->previewCategory]);
    }
}
