<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobHistoryModel;
use App\Models\JobsModel;
use App\Models\User;

class JobHistoryController extends Controller
{
    public function index(Request $request){
       $data['getRecord'] = JobHistoryModel::getRecord($request);
        return view('backend.job_history.list',$data);
    }

    public function add(Request $request){
        $data['getEmployee'] = User::where('is_role','=',0)->get();
        $data['getJobs'] = JobsModel::get();
        return view('backend.job_history.add',$data);

    }

    public function add_insert(Request $request)
    {
        // dd($request->all());

        $user = request()->validate([
            'employee_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'job_id' => 'required',
            'department_id' => 'required',
        ]);

        $user = new JobHistoryModel;

        $user->employee_id = trim($request->employee_id);
        $user->start_date = trim($request->start_date);
        $user->end_date = trim($request->end_date);
        $user->job_id = trim($request->job_id);
        $user->department_id = trim($request->department_id);
        $user->save();

        return redirect('admin/job_history')->with('success','Job History Successfully Added .');

    }


    public function edit($id){
        $data['getEmployee'] = User::where('is_role','=',0)->get();
        $data['getJobs'] = JobsModel::get();
        $data['getRecord'] = JobHistoryModel::find($id);
        return view('backend.job_history.edit', $data);
    }

    public function update($id, Request $request)
    {
        $user =  JobHistoryModel::find($id);
        $user->employee_id = trim($request->employee_id);
        $user->start_date = trim($request->start_date);
        $user->end_date = trim($request->end_date);
        $user->job_id = trim($request->job_id);
        $user->department_id = trim($request->department_id);
        $user->save();

        return redirect('admin/job_history')->with('success','Job History Updated Successfully.');
    }


    public function delete($id){
        $user = JobHistoryModel::find($id);
        $user->delete();
        return redirect()->back()->with('error','Job History Deleted Successfully .');
    }



}
