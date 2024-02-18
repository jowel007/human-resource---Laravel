<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class JobHistoryModel extends Model
{
    use HasFactory;

    protected $table = 'job_history';

    static public function getRecord($request){
        // $return = self::select('job_history.*')
        //         ->orderBy('id','asc')
        //         ->paginate(10);
        // return $return;

        $return = self::select('job_history.*','users.name','jobs.job_title')
                ->join('users','users.id', '=', 'job_history.employee_id')
                ->join('jobs','jobs.id', '=', 'job_history.job_id')
                ->orderBy('job_history.id','desc');

                //search or filter data
        if(!empty(Request::get('id')))
        {
            $return = $return->where('job_history.id', '=', Request::get('id'));
        }

        if(!empty(Request::get('name')))
        {
            $return = $return->where('users.name','like', '%' .Request::get('name'). '%');
        }

        if(!empty(Request::get('start_date')))
        {
            $return = $return->where('job_history.start_date', '=', Request::get('start_date'));
        }

        if(!empty(Request::get('end_date')))
        {
            $return = $return->where('job_history.end_date', '=', Request::get('end_date'));
        }

        if(!empty(Request::get('job_title')))
        {
            $return = $return->where('jobs.job_title','like', '%' .Request::get('job_title'). '%');
        }

        $return = $return->paginate(10);
        return $return;


    }

    public function employee_name(){
        return $this->belongsTo(User::class,'employee_id');
    }

    public function job_name(){
        return $this->belongsTo(JobsModel::class,'job_id');
    }


}
