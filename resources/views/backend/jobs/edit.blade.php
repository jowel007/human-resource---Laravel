
@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-0">Jobs</h4>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Edit</a></li>
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
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h6 >Edit Jobs</h6>
                            </div>

                            <form  class="form-horizontal" method="post" action="{{ url('admin/jobs/update/'.$getRecord->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    {{-- {{ $getRecord->id }} --}}
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Job Title
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-12">
                                            <input  type="text" name="job_title" value="{{ $getRecord->job_title }}" class="form-control" required placeholder="Enter Job Title" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Min Salary
                                            <span style="color: red"></span>
                                        </label>
                                        <div class="col-sm-12">
                                            <input  type="text" name="min_salary" value="{{ $getRecord->min_salary }}" class="form-control" required placeholder="Enter Min Salary">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Max Salary
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-12">
                                            <input  type="text" name="max_salary" value="{{ $getRecord->max_salary }}" required class="form-control" required placeholder="Enter Max Salary">
                                            <span style="color: red">{{ $errors->first('max_salary') }}</span>
                                        </div>
                                    </div>

                                   

                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success float-right">Update</button>
                                    <a href="{{ url('admin/jobs') }}" class="btn btn-default float-left">back</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
