<?php

namespace App\Models;

use App\Models\Image;
use App\Models\Category;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory,Searchable;

    protected $fillable=['title','description','price'];

    public function user(){
        return $this->belongsTo(User::class);
    }


    public function category(){
        return $this->belongsTo(Category::class);
    }

    

    public function toSearchableArray(){
        $category=$this->category;
        return[
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'category'=>$category,
            'price'=>$this->price,
        ];
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
