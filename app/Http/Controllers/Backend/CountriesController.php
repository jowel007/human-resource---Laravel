<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Countries;
use App\Models\Regions;

class CountriesController extends Controller
{
    public function index(Request $request){
       $data['getRecord'] = Countries::getRecord($request);
       return view('backend.countries.list',$data);
    }

    public function add(){
        $data['getRegions'] = Regions::get();
        return view('backend.countries.add', $data);
    }

    public function add_insert(Request $request){
        $insert = request()->validate([
            'country_name' => 'required',
            'regions_id' => 'required',
        ]);

        $insert = new Countries;
        $insert->country_name = $request->country_name;
        $insert->regions_id = $request->regions_id;
        $insert->save();

        return redirect('admin/countries')->with('success','Countries Successfully Created .');
    }


}
