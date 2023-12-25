<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class EmployeeController extends Controller
{
    public function index(Request $request){
        $data['getRecord'] = User::getRecord();
        return view('backend.employee.list',$data);
    }

    public function add(Request $request){
        return view('backend.employee.add');
    }

    public function insert(Request $request){
        //  dd($request->all());
        $user = request()->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'hire_date' => 'required',
            'job_id' => 'required',
            'commission_pct' => 'required',
            'manager_id' => 'required',
            'department_id' => 'required'
        ]);

        $user = new User;
        $user->name = trim($request->name);
        $user->last_name = trim($request->last_name);
        $user->email = trim($request->email);
        $user->phone_number = trim($request->phone_number);
        $user->hire_date = trim($request->hire_date);
        $user->job_id = trim($request->job_id);
        $user->salary = trim($request->salary);
        $user->commission_pct = trim($request->commission_pct);
        $user->manager_id = trim($request->manager_id);
        $user->department_id = trim($request->department_id);
        $user->is_role = 0; // 0 - employee
        $user->save();

        return redirect('admin/employee')->with('success','Employee Successfully Register .');
    }

    public function view($id){
        // echo $id;
        // die();
        $data['getRecord'] = User::find($id);
        return view ('backend.employee.view',$data);
    }

    public function edit($id){
        $data['getRecord'] = User::find($id);
        return view ('backend.employee.edit',$data);
    }

    public function update($id, Request $request)
    {
        // dd($id);

        $user = request()->validate([
            'email' => 'required|unique:users,email,'.$id,
        ]);

        $user = User::find($id);
        $user->name = trim($request->name);
        $user->last_name = trim($request->last_name);
        $user->email = trim($request->email);
        $user->phone_number = trim($request->phone_number);
        $user->hire_date = trim($request->hire_date);
        $user->job_id = trim($request->job_id);
        $user->salary = trim($request->salary);
        $user->commission_pct = trim($request->commission_pct);
        $user->manager_id = trim($request->manager_id);
        $user->department_id = trim($request->department_id);
        $user->is_role = 0; // 0 - employee
        $user->save();

        return redirect('admin/employee')->with('success','Employee Successfully Update .');

    }


    public function delete($id){
        $recordDelete = User::find($id);
        $recordDelete->delete();
        return redirect()->back()->with('error','Employee Deleted Successfully .');
    }


}
