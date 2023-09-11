<?php

namespace App\Models;

use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory,Searchable;

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }

    

    public function toSearchableArray(){
        $category=$this->category;
        $array=[
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'category'=>$category
        ];
    }
}
