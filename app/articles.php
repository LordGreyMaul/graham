<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class articles extends Model
{
    protected $fillable = [
        'title',
        'body',
        'published_at',
        'template'
    ];

    protected $dates = ['published_at'];
    
	//Get all published articles by date
    public function scopePublished($query)
    {
		$query->where('published_at' , '<=' , Carbon::now());
    }
	//Get all unpublished or future articles
    public function scopeUnpublished($query)
    {
		$query->where('published_at' , '>=' , Carbon::now());
    }
	// Set form to publish articles with a time and date in the Published_at field
    public function setPublichedAtAttribute($date)
    {
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d' , $date);
    }
    
    public function photo() 
    {
        return $this->hasMany('App\artphoto');
    }

    public static function locatedAt($id)
    {
        return static::where(compact('id'))->first();
    }
    
    public function addPhoto(artphoto $photo) 
    {
        return $this->photo()->save($photo);
    }
}
