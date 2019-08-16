<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';

     public function user(){
        return $this->belongsTo('App\User');
    }

    public function program(){
    	return $this->belongsTo('App\Program');
    }

    public function attainment(){
    	return $this->belongsTo('App\Attainment');
    }
}
