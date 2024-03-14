
@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Jobs Grades</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6" style="text-align:right">
                        <a href="{{ url('admin/job_grades/add') }}" class="btn btn-primary">Add Job Grades</a>
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
                                <h3 class="card-title">Search Job Grades </h3>

                            </div>

                            <form action="" method="get">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="form-group col-md-2">
                                            <label for="">ID</label>
                                            <input type="text" class="form-control" value="{{ Request()->id }}" name="id" placeholder="ID">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="">Grade Level</label>
                                            <input type="text" class="form-control" value="{{ Request()->grade_level }}" name="grade_level" placeholder="Grade Level">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="">Lowest Salary</label>
                                            <input type="text" class="form-control" value="{{ Request()->lowest_salary }}" name="lowest_salary" placeholder="Enter Lowest Salary">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="">Highest Salary</label>
                                            <input type="text" class="form-control" value="{{ Request()->higest_salary }}" name="higest_salary" placeholder="Enter Highest Salary">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <button type="submit" class="btn btn-primary" style="margin-top: 30px">Search</button>
                                            <a href="{{ url('admin/job_grades') }}" class="btn btn-success" style="margin-top: 30px">Reset</a>
                                        </div>

                                    </div>
                                </div>
                            </form>

                        </div>

                        @include('_message')


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Jobs Grades List</h3>
                            </div>

                            <div class="card-body p-0">
                                <table class="table table-striped">

                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Grade Level</th>
                                        <th>Highest Salary</th>
                                        <th>Lowest Salary</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @forelse($getRecord as $value)
                                        <tr>
                                            <th>{{ $value->id }}</th>
                                            <th>{{ $value->grade_level }}</th>
                                            <th>{{ $value->higest_salary }}</th>
                                            <th>{{ $value->lowest_salary }}</th>
                                            <th>{{ date('d-m-Y', strtotime($value->created_at)) }}</th>
                                            <th>{{ date('d-m-Y', strtotime($value->updated_at)) }}</th>
                                            <th>
                                                <a href="{{ url('admin/job_grades/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ url('admin/job_grades/delete/'.$value->id) }}" onclick="return confirm('Are You Confirm To Delete ?')" class="btn btn-danger">Delete</a>
                                            </th>
                                        </tr>
                                        @empty
                                            <tr>
                                                <td colspan="100%">No Record Found</td>
                                            </tr>
                                    @endforelse


                                    </tbody>

                                </table>
                            </div>

                            {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}

                        </div>

                    </section>
                </div>
            </div>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection



