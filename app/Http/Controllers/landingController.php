<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\College;
use App\Program;
use App\Attainment;
class landingController extends Controller
{
     public function getColleges(){
        $colleges = College::all();
        return $colleges;
    }
    
    //get program by colleges
    public function getProgByColleges(Request $rq){
        $prog = Program::where('college_id',$rq->id)->get();
        return $prog;
    }

    //get undergrad && postgraduate
    public function attainment(){
    	$attain = Attainment::all();
    	return $attain;
    }
}
