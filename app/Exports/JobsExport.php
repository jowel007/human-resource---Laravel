<?php

namespace App\Exports;
use App\Models\JobsModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
Use \Maatwebsite\Excel\Sheet;
use App\Exports\JobsExport;
use Request;


class JobsExport  implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings{

    public function collection(){
        $request = Request::all();
        return JobsModel::getRecord($request);
    }

    protected $index = 0;

    public function map($user):array{
        $createdAtFormat = date('Y-m-d', strtotime($user->created_at));
        return[
            ++$this->index,
            $user->id,
            $user->job_title,
            $user->min_salary,
            $user->max_salary,
            $createdAtFormat
            
        ];
    }

    public function headings():array{
        return[
            'S.No',
            'Table ID',
            'Job Title',
            'Min Salary',
            'Max Salary',
            'Created Date'
        ];
    }
}


?>