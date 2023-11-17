<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request){
        return view('backend.employee.list');
    }

    public function add(){
        return view('backend.employee.add');
    }

    public function insert(Request $request){
        dd($request->all());
    }
}
