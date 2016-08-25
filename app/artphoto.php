<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class artphoto extends Model
{
   protected $table = 'articlephoto';
   protected $fillable = ['path'];
   protected $baseDir = 'uploads/photos';

   public function photo()
   {
   	return $this->belongsTo('App\Article');
   }

   public static function fromForm(UploadedFile $file) 
   {
   	$photo = new static;
   	$name = time() . $file->getClientOriginalName();
   	$photo->path = $photo->baseDir . '/' .$name;
   	$file->move($photo->baseDir , $name);
   	return $photo;
   }
}
