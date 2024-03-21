<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;

     protected $table = 'countries';


     static public function getRecord($request)
     {
        $return = self::select('countries.*');

        $return = $return->orderBy('id','asc')->paginate(5);
             return $return;
     }


     public function get_region_name(){
        return $this->belongsTo(Regions::class,'regions_id');
     }



}
