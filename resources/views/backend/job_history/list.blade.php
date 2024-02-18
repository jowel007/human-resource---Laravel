
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
                        <a href="{{ url('admin/job_history/add') }}" class="btn btn-primary">Add Job History</a>
                        {{-- <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">List</a></li>
                            <li class="breadcrumb-item active">Employee List</li>
                        </ol> --}}
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container">
                <div class="row">
                    <section class="col-md-12">
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
                                                    @else
                                                        Devops
                                                    @endif
                                                </th>
                                                <th>{{ date('d-m-Y', strtotime($value->created_at)) }}</th>
                                                <th>
                                                    <a href="#" class="btn btn-primary">Edit</a>
                                                    <a href="#" onclick="return confirm('Are You Confirm To Delete ?')" class="btn btn-danger">Delete</a>
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


