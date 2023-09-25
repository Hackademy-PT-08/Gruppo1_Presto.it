<?php

namespace App\Models;

use App\Models\User;
use App\Models\Announcement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;
    protected $fillable=['path'];

    public function announcement() {
        return $this->belongsTo(Announcement::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public static function geturlByFilePatch ($filePath,$w=null,$h=null)
    {
        if(!$w && !$h){
            return Storage::url($filePath);
        }

        $path=dirname($filePath);
        $fileName=basename($filePath);
        $file="$path/". "crop-{$w}x{$h}." . $fileName;
        return Storage::url($file);

    }

    public function getUrl($w=null,$h=null)
    {
        return Image::geturlByFilePatch($this->path,$w,$h);
    }

    
}
