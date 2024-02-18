
@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Jobs History</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Edit</a></li>
                            <li class="breadcrumb-item active">Jobs History List</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-info">
                            <div class="card-header">
                                <h6 >Edit Jobs History</h6>
                            </div>

                            <form  class="form-horizontal" method="POST" href="{{ url('admin/job_history/update/'.$getRecord->id) }}" enctype="multipart/form-data">

                                @csrf

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"> Employee Name
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="employee_id">
                                                <option value="">Select Employee Name</option>
                                                @foreach ($getEmployee as $employee)
                                                    <option {{ ($employee->id == $getRecord->employee_id) ? 'selected' : '' }} value="{{ $employee->id }}">{{ $employee->name }}{{ $employee->last_name }}</option>
                                                @endforeach
                                                
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"> Start Date
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-9">
                                            <input  type="date" name="start_date" value="{{ $getRecord->start_date }}" class="form-control"  placeholder="Enter Min Salary" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"> End Date
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-9">
                                            <input  type="date" name="end_date" value="{{ $getRecord->end_date }}" class="form-control"  placeholder="Enter Min Salary" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"> Job Name(Job Id)
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="job_id">
                                                <option value="">Select Job Name</option>
                                                @foreach ($getJobs as $jobs)
                                                    <option {{ ($jobs->id == $getRecord->job_id) ? 'selected' : '' }} value="{{ $jobs->id }}">{{  $jobs->job_title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"> Department Name(Job Id)
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="department_id">
                                                <option value="">Select Department Name</option>
                                                <option {{ ($getRecord->department_id == 1 ) ? 'selected' : '' }} value="1">Designer & Developer</option>
                                                <option {{ ($getRecord->department_id == 2 ) ? 'selected' : '' }} value="2">Devops</option>
                                                <option {{ ($getRecord->department_id == 3 ) ? 'selected' : '' }} value="3">Mobile APP</option>
                                                <option {{ ($getRecord->department_id == 4 ) ? 'selected' : '' }} value="4">Business Developer</option>
                                            </select>
                                        </div>
                                    </div>




                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success float-right">Update</button>
                                    <a href="{{ url('admin/job_history') }}" class="btn btn-default float-left">Reset</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
