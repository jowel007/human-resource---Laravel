
@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Jobs</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6" style="text-align:right">
                        <form action="{{ url('admin/jobs_export') }}" method="GET">
                            <input type="hidden" name="start_date" value="{{ Request()->start_date }}">
                            <input type="hidden" name="start_date" value="{{ Request()->end_date }}">
                            <a href="{{ url('admin/jobs_export?start_date='.Request::get('start_date').'&end_date='.Request::get('end_date')) }}"  class="btn btn-success">Excel Export</a>
                        </form><br>
                        <a href="{{ url('admin/jobs/add') }}" class="btn btn-primary">Add Jobs</a>
                        {{-- <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">List</a></li>
                            <li class="breadcrumb-item active">Employee List</li>
                        </ol> --}}
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        {{-- @include('_message') --}}
        <section class="content">
            <div class="container-fluid">




                <div class="row">
                    <section class="col-lg-12">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Search Jobs</h3>

                            </div>

                            <form action="" method="get">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="form-group col-md-3">
                                            <label for="">ID</label>
                                            <input type="text" class="form-control" value="{{ Request()->id }}" name="id" placeholder="ID">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="">Job Title</label>
                                            <input type="text" class="form-control" value="{{ Request()->job_title }}" name="name" placeholder="Job Title">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="">Min Salary</label>
                                            <input type="text" class="form-control" value="{{ Request()->min_salary }}" name="name" placeholder="Min Salary">
                                        </div>

                                        <div class="form-group col-md-3">
                                            <label for="">max Salary</label>
                                            <input type="text" class="form-control" value="{{ Request()->max_salary }}" name="name" placeholder="Max Salary">
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
                                            <button type="submit" class="btn btn-primary" style="margin-top: 30px">Search</button>
                                            <a href="{{ url('admin/jobs') }}" class="btn btn-success" style="margin-top: 30px">Reset</a>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>

                        @include('_message')

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Jobs List</h3>
                            </div>

                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Job Title</th>
                                        <th>Min Salary</th>
                                        <th>Max Salary</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach ($getRecord as $value)
                                        <tr>
                                            <td>{{ $value->id }}</td>
                                            <td>{{ $value->job_title }}</td>
                                            <td>{{ $value->min_salary }}</td>
                                            <td>{{ $value->max_salary }}</td>
                                            <td>{{ date('d-m-Y H:i:s', strtotime($value->updated_at)) }}</td>
                                            <td>
                                                <a href="{{ url('admin/jobs/view/'.$value->id) }}" class="btn btn-info">View</a>
                                                <a href="{{ url('admin/jobs/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ url('admin/jobs/delete/'.$value->id) }}" onclick="return confirm('Are You Confirm To Delete ?')" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach


                                    </tbody>
                                </table>
                                <div style="padding: 10px; float: right">
                                    {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                                </div>

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


