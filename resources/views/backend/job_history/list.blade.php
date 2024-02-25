
@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Jobs History</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6" style="text-align:right">

                        <form action="{{ url('admin/job_history_export') }}" method="GET">
                            <input type="hidden" name="start_date" value="{{ Request()->start_date }}">
                            <input type="hidden" name="start_date" value="{{ Request()->end_date }}">
                            <a href="{{ url('admin/job_history_export?start_date='.Request::get('start_date').'&end_date='.Request::get('end_date')) }}"  class="btn btn-success">Excel Export</a>
                        </form><br>

                        <a href="{{ url('admin/job_history/add') }}" class="btn btn-primary">Add Job History</a>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container">
                <div class="row">
                    <section class="col-md-12">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Search Job History</h3>

                            </div>

                            <form action="" method="get">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="form-group col-md-3">
                                            <label for="">ID</label>
                                            <input type="text" class="form-control" value="{{ Request()->id }}" name="id" placeholder="ID">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="">Employee Name</label>
                                            <input type="text" class="form-control" value="{{ Request()->name }}" name="name" placeholder="Employee Name">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="">Form Date (Start Date)</label>
                                            <input type="date" class="form-control" value="{{ Request()->start_date }}" name="start_date" >
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="">To Date (End Date)</label>
                                            <input type="date" class="form-control" value="{{ Request()->end_date }}" name="end_date" >
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="">Job Title</label>
                                            <input type="text" class="form-control" value="{{ Request()->job_title }}" name="job_title" placeholder="Job Title">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <button type="submit" class="btn btn-primary" style="margin-top: 30px">Search</button>
                                            <a href="{{ url('admin/job_history') }}" class="btn btn-success" style="margin-top: 30px">Reset</a>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>

                        @include('_message')


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Jobs History List</h3>
                            </div>

                            <div class="card-body p-0">
                                <table class="table table-striped">

                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Employee ID</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Job Name(job id)</th>
                                            <th>Department Name(Department ID) </th>
                                            <th>Created Date </th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($getRecord as $value)
                                            <tr>
                                                <th>{{ $value->id }}</th>
                                                <th>{{ !empty($value->employee_name->name) ? $value->employee_name->name : '' }}{{ !empty($value->employee_name->last_name) ? $value->employee_name->last_name : '' }}</th>
                                                <th>{{ date('d-m-Y', strtotime($value->start_date)) }}</th>
                                                <th>{{ date('d-m-Y',strtotime($value->end_date)) }}</th>
                                                <th>{{ !empty($value->job_name->job_title) ? $value->job_name->job_title : ''  }}</th>
                                                <th>
                                                    @if(!empty($value->department_id == 1))
                                                        Developer
                                                    @elseif(!empty($value->department_id == 2))
                                                        Devops
                                                    @elseif(!empty($value->department_id == 3))
                                                        Mobile APP
                                                    @elseif(!empty($value->department_id == 4))
                                                        Business Developer
                                                    @endif
                                                </th>
                                                <th>{{ date('d-m-Y H:i A', strtotime($value->created_at)) }}</th>
                                                <th>
                                                    <a href="{{ url('admin/job_history/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
                                                    <a href="{{ url('admin/job_history/delete/'.$value->id) }}" onclick="return confirm('Are You Confirm To Delete ?')" class="btn btn-danger">Delete</a>
                                                </th>
                                            </tr>

                                        @endforeach

                                    </tbody>

                                </table>
                            </div>

                        </div>

                    </section>
                </div>
            </div>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection


