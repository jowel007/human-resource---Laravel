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
       
        return view('backend.job_history.list');
    }

    public function add(Request $request){
        $data['getEmployee'] = User::where('is_role','=',0)->get();
        $data['getJobs'] = JobsModel::get();
        return view('backend.job_history.add',$data);

    }
}
