<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
     //model for program table
    protected $table = 'program';

    public function college(){
    	return $this->belongsTo('App\College');
    }

    public function profile(){
    	return $this->hasMany('App\Profile');
    }
}
