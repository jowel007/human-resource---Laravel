<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobsModel;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\JobsExport;
//use App\Models\User;

class JobController extends Controller
{
    public function index(Request $request){
        $data['getRecord'] = JobsModel::getRecord($request);
        return view('backend.jobs.list',$data);
    }

    public function add(Request $request){
        return view('backend.jobs.add');
    }

    public function insert(Request $request){
    //  dd($request->all());

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

    public function edit($id){
        $data['getRecord'] = JobsModel::find($id);
        return view ('backend.jobs.edit',$data);
    }

    public function update($id, Request $request){
        

        $user = request()->validate([
            'job_title' => 'required',
            'min_salary' => 'required',
            'max_salary' => 'required',
        ]);

        $user = JobsModel::find($id);


        $user->job_title = trim($request->job_title);
        $user->min_salary = trim($request->min_salary);
        $user->max_salary = trim($request->max_salary);

        $user->save();

        return redirect('admin/jobs')->with('success','Jobs Successfully Updated .');

    }

    public function delete($id){
        $recordDelete = JobsModel::find($id);
        $recordDelete->delete();
        return redirect()->back()->with('error','Jobs Deleted Successfully .');
    }


    //export excel file 

    public function jobsExport(){
        return Excel::download(new JobsExport, 'jobs.xlsx');
    }


}
