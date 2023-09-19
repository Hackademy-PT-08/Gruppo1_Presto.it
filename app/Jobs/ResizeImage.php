<?php

namespace App\Jobs;


use Spatie\Image\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class ResizeImage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    private $w;//! larghezza
    private $h; //!altezza
    private $fileName; //!nome file
    private $filePath; //!percorso file
    /**
     * Create a new job instance.
     */
    public function __construct($filePath,$w,$h)
    {
        $this->filePath=dirname($filePath); //! funzione che ci da la cartella dove verrano contenuti i file
        $this->fileName=basename($filePath); //! il nome del file
        $this->w=$w;
        $this->h=$h;

    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $w=$this->w;
        $h=$this->h;
        $searchPath=storage_path() .'/app/public/' .  $this->filePath . '/'. $this->fileName; //!path per la ricerca
        $destPath=storage_path() . '/app/public/' .  $this->filePath . "/". pathinfo($this->fileName)['filename'] . "-{$w}x{$h}." . pathinfo($this->fileName)['extension'];//!path  dove verrano salvati

        $croppedImage=Image::load($searchPath)
                        ->fit(Manipulations::FIT_CONTAIN,$w,$h)
                        ->save($destPath);
    }
}
