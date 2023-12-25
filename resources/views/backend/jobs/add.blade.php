
@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Jobs</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Add</a></li>
                            <li class="breadcrumb-item active">Jobs List</li>
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
                                <h6 >Add Jobs</h6>
                            </div>

                            <form  class="form-horizontal" method="POST" accept="{{ url('admin/jobs/add') }}" enctype="multipart/form-data">

                                @csrf

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Job Title
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <input  type="text" name="job_title" value="{{ old('job_title') }}" class="form-control"  placeholder="Enter Job Title" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Min Salary
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <input  type="number" name="min_salary" value="{{ old('min_salary') }}" class="form-control"  placeholder="Enter Min Salary" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Max Salary
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <input  type="number" name="max_salary" value="{{ old('max_salary') }}" class="form-control"  placeholder="Enter Min Salary" required>
                                        </div>
                                    </div>




                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success float-right">Submit</button>
                                    <a href="{{ url('admin/jobs') }}" class="btn btn-default float-left">Reset</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
