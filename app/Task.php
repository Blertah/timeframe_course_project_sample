<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = ['created_at','updated_at'];
	//protected $fillable = ['title','description'];


    public function comments()
    {
		return $this->hasMany('App\Comment','post_id');
    }

    public function getTitleAttribute($value)
    {
    	return ucfirst($value);
    }
    /*
    public function setTitleAttribute($value)
    {
    	//return $value;
    	$this->attributes["title"] = $value . " Post";
    }
    */
}
