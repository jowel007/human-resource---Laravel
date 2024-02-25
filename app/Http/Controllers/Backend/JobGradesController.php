<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobGrades;

class JobGradesController extends Controller
{
    public function index(Request $request){
        $data['getRecord'] = JobGrades::getRecord($request);
        return view('backend.job_grades.list',$data);
    }

    public function add(Request $request){
        return view('backend.job_grades.add');
    }

    public function add_insert(Request $request){
        //  dd($request->all());

        $user = request()->validate([
            'grade_level' => 'required',
            'higest_salary' => 'required',
            'lowest_salary' => 'required'
        ]);
        $user = new JobGrades;
        $user->grade_level = trim($request->grade_level);
        $user->higest_salary = trim($request->higest_salary);
        $user->lowest_salary = trim($request->lowest_salary);
        $user->save();

        return redirect('admin/job_grades')->with('success','Job Grade Successfully Created .');

    }

}
