
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
                                        <th>Employee ID</th>
                                        <th>Start Date</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                        <tr>
                                            <th>1</th>
                                            <th>name</th>
                                            <th>date</th>
                                            <th>
                                                <a href="{{ url('admin/job_history/edit') }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ url('admin/job_history/delete') }}" onclick="return confirm('Are You Confirm To Delete ?')" class="btn btn-danger">Delete</a>
                                            </th>
                                        </tr>



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



