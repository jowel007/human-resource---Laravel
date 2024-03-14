<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Regions;
class RegionsController extends Controller
{
    public function index(Request $request){
        $data['getRecord'] = Regions::getRecord($request);
        return view('backend.regions.list',$data);
    }

    public function add(){
        return view('backend.regions.add');
    }

    public function add_insert(Request $request){

        $user = request()->validate([
            'region_name' => 'required',
        ]);

        $user = new Regions;
        $user->region_name = trim($request->region_name);
        $user->save();

        return redirect('admin/regions')->with('success','Regions Successfully Created .');

    }

    public function edit($id){
        $data['getRecord'] = Regions::find($id);
        return view('backend.regions.edit',$data);
    }

    public function update(Request $request, $id){
        $user = Regions::find($id);
        $user->region_name = trim($request->region_name);
        $user->save();

        return redirect('admin/regions')->with('success','Regions Successfully Updated .');
    }

    public function delete($id){
        $users = Regions::find($id);
        $users->delete();

        return redirect('admin/regions')->with('error','Regions Successfully Updated .');
    }






}
