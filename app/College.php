<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    protected $table = 'college';

    public function program(){
    	return $this->hasMany('App\Program');
    }
}
