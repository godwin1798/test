<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attainment extends Model
{
    protected $table = 'attainment';  

    public function profile() {
    	return $this->hasMany('App\Profile');
    }
}
