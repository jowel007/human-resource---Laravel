<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobsModel;
//use App\Models\User;

class JobController extends Controller
{
    public function index(Request $request){
        $data['getRecord'] = JobsModel::getRecord();
        return view('backend.jobs.list',$data);
    }

    public function add(Request $request){
        return view('backend.jobs.add');
    }

    public function insert(Request $request){
//        dd($request->all());

        $user = request()->validate([
            'job_title' => 'required',
            'min_salary' => 'required',
            'max_salary' => 'required',
        ]);

        $user = new JobsModel;
        $user->job_title = trim($request->job_title);
        $user->min_salary = trim($request->min_salary);
        $user->max_salary = trim($request->max_salary);
        $user->save();

        return redirect('admin/jobs')->with('success','Jobs Successfully Created .');

    }

    public function view($id){
        $data['getRecord'] = JobsModel::find($id);
        return view ('backend.jobs.view',$data);
    }
}
