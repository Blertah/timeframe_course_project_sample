<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = ['created_at','updated_at'];
	//protected $fillable = ['title','description'];

}
