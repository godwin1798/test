<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\College;
use App\Program;
class adminController extends Controller
{
    public function dashboard(){
		return view('admin.dashboard');
	}

	public function colleges(){
		return view('admin.CollegeProg');
	}

	// add college function
	public function addCollege(Request $r){
		
		$college = new College;
		$college->college_acronym = $r->acronym;
		$college->college_name = $r->cname;
		$college->save();

		return 'college added';
	}

	// display college function
	public function displayCollege(){
		return College::all();
	}

	// delete college function
	public function deleteCollege(Request $r){
		$college = College::where('id',$r->id)->delete();
		return $college;
	}

	// update college function
	public function updateCollege(Request $rq){
		 // $update = College::where('college_id',$rq->id)->firstOrFail();
		 $update = College::find($rq->id);
		 $update->college_acronym = $rq->acronym;
		 $update->college_name = $rq->name;
		 $update->save();
		 return $update;
	}

	// add program function
	public function addProgram(Request $rq){
		
		$prog = new Program;
		$prog->college_id = $rq->collegeId;
		$prog->prog_acronym = $rq->acronym;
		$prog->prog_name = $rq->name;
		$prog->save();
		
		return 'program added';
	}
	// display programs
	public function displayProg(){
		$programs = Program::with('college')->get();
		return $programs;
	}
	// remove program
	public function removeProgram(Request $rq){
		$remove = Program::where('id',$rq->id)->delete();
		return $remove;
	}

	//update program
	public function updateProg(Request $rq){
		$update = Program::find($rq->id);
		$update->college_id = $rq->collegeId;
		$update->prog_acronym = $rq->acronym; 
		$update->prog_name = $rq->name;
		$update->save();
		return $update;
	}
}
