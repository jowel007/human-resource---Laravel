<?php

namespace App\Exports;
use App\Models\JobHistoryModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
 use Maatwebsite\Excel\Concerns\WithHeadingRow;
 Use \Maatwebsite\Excel\Sheet;
 use App\Exports\JobHistoryExport;
use Request;


class JobHistoryExport  implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings{

    public function collection(){
        $request = Request::all();
        return JobHistoryModel::getRecord($request);
    }

    protected $index = 0;

    public function map($user):array{

        $startDate = date('d-m-Y', strtotime($user->start_date));
        $endDate = date('d-m-Y', strtotime($user->end_date));

        if ($user->department_id == 1){
            $department = 'Designer & Developer';
        }
        else if($user->department_id == 2)
        {
            $department = 'Devops';
        }
        else if($user->department_id == 3)
        {
            $department = 'Mobile APP';
        }
        else
        {
            $department = 'Business Developer';
        }

        $createdAtFormat = date('d-m-Y H:i A', strtotime($user->created_at));

        return[
            $user->id,
            $user->name.' '.$user->last_name,
            $startDate,
            $endDate,
            $user->job_title,
            $department,
            $createdAtFormat
        ];
    }

    public function headings():array{
        return[
            'Table ID',
            'Employee Name',
            'Start Date',
            'End Date',
            'Job Name',
            'Department Name',
            'Created At'

        ];
    }
}


?>
