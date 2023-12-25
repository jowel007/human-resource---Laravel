
@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">View Employee</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">View</a></li>
                            <li class="breadcrumb-item active">Employee List</li>
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
                                <h5 >View Employee</h5>
                            </div>

                            <form  class="form-horizontal" method="post"  enctype="multipart/form-data">

                                <div class="card-body">


                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col">Description</th>
                                            <th scope="col">Information</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">
                                                <label class="col-sm-2 col-form-label"> ID
                                                    <span style="color: red">*</span>
                                                </label>
                                            </th>
                                            <td>
                                                <div class="col-sm-8">
                                                    {{ $getRecord->id }}
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">
                                                <label class="col-form-label"> Job Title
                                                    <span style="color: red">*</span>
                                                </label>
                                            </th>
                                            <td>
                                                <div class="col-sm-8">
                                                    {{ $getRecord->job_title }}
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">
                                                <label class="col-form-label"> Min Salary
                                                    <span style="color: red">*</span>
                                                </label>
                                            </th>
                                            <td>
                                                <div class="col-sm-8">
                                                    {{ $getRecord->min_salary }}
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">
                                                <label class="col-form-label"> Max Salary
                                                    <span style="color: red">*</span>
                                                </label>
                                            </th>
                                            <td>
                                                <div class="col-sm-8">
                                                    {{ $getRecord->max_salary	 }}
                                                </div>
                                            </td>
                                        </tr>



                                        <tr>
                                            <th scope="row">
                                                <label class="col-form-label">Created Date
                                                    <span style="color: red">*</span>
                                                </label>
                                            </th>
                                            <td>
                                                <div class="col-sm-8">
                                                    {{ date('d-m-Y H:i A',strtotime($getRecord->created_at)) }}
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">
                                                <label class="col-form-label">Updated Date
                                                    <span style="color: red">*</span>
                                                </label>
                                            </th>
                                            <td>
                                                <div class="col-sm-8">
                                                    {{ date('d-m-Y H:i A',strtotime($getRecord->updated_at)) }}

                                                </div>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>




                                </div>

                                <div class="card-footer">
                                    <a href="{{ url('admin/jobs') }}" class="btn btn-default float-left">Back</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>




    </div>

@endsection
