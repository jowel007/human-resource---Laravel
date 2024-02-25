<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;
class JobGrades extends Model
{
    use HasFactory;

    protected $table = 'job_grades';


    static public function getRecord($request){
//        $return = self::select('job_grades.*')->orderBy('id','asc')->paginate(5);
//        return $return;


        $return = self::select('job_grades.*');

        //search filter data start//
        if(!empty(Request::get('id')))
        {
            $return = $return->where('job_grades.id', '=', Request::get('id'));
        }
        if(!empty(Request::get('grade_level')))
        {
            $return = $return->where('job_grades.grade_level','like', '%' .Request::get('grade_level'). '%');
        }

        if(!empty(Request::get('lowest_salary')))
        {
            $return = $return->where('job_grades.lowest_salary','like', '%' .Request::get('lowest_salary'). '%');
        }

        if(!empty(Request::get('higest_salary')))
        {
            $return = $return->where('job_grades.higest_salary','like', '%' .Request::get('higest_salary'). '%');
        }

        //search filter data end//

        $return =   $return->orderBy('id','asc')->paginate(5);
        return $return;
    }


}
