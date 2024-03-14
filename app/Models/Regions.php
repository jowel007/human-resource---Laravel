<?php

namespace App\Models;

use Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    use HasFactory;

    protected $table = 'regions';



    static public function getRecord($request){
        $return = self::select('regions.*')
            ->orderBy('regions.id','asc');

        // search bar add
            if (!empty(Request::get('id'))){
                $return = $return->where('id','=',Request::get('id'));
            }

            if (!empty(Request::get('region_name')))
                $return = $return->where('region_name','like','%'.Request::get('region_name').'%');
        // search bar end


        $return = $return->paginate(20);
        return $return;

    }


}
