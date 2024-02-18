<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobHistoryModel extends Model
{
    use HasFactory;

    protected $table = 'job_history';

    static public function getRecord($request){
        $return = self::select('job_history.*')
                ->orderBy('id','asc')
                ->paginate(10);
        return $return;
    }

    public function employee_name(){
        return $this->belongsTo(User::class,'employee_id');
    }

    public function job_name(){
        return $this->belongsTo(JobsModel::class,'job_id');
    }
}
