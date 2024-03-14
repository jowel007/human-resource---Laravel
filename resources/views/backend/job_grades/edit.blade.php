
@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Jobs Grades</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Edit</a></li>
                            <li class="breadcrumb-item active">Jobs Grades Edit</li>
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
                                <h6 >Add Jobs Grades</h6>
                            </div>

                            <form  class="form-horizontal" method="POST" href="{{ url('admin/job_grades/edit/'.$getRecord->id) }}" enctype="multipart/form-data">

                                @csrf

                                <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"> Grade Level
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-9">
                                            <input  type="text" name="grade_level" value="{{ $getRecord->grade_level }}" class="form-control"  placeholder="Enter Grade Level" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"> Highest Salary
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-9">
                                            <input  type="number" name="higest_salary" value="{{ $getRecord->higest_salary }}" class="form-control"  placeholder="Enter highest Salary" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"> Lowest Salary
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-9">
                                            <input  type="number" name="lowest_salary" value="{{ $getRecord->lowest_salary }}"  class="form-control"  placeholder="Enter Lowest Salary" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success float-right">Submit</button>
                                    <a href="{{ url('admin/job_grades') }}" class="btn btn-default float-left">Reset</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
