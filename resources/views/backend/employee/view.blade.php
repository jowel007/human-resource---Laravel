
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
                                                <label class="col-form-label"> First Name
                                                    <span style="color: red">*</span>
                                                </label>
                                            </th>
                                            <td>
                                                <div class="col-sm-8">
                                                    {{ $getRecord->name }}
                                                </div>
                                            </td>
                                          </tr>

                                          <tr>
                                            <th scope="row">
                                                <label class="col-form-label"> Last Name
                                                    <span style="color: red">*</span>
                                                </label>
                                            </th>
                                            <td>
                                                <div class="col-sm-8">
                                                    {{ $getRecord->last_name }}
                                                </div>
                                            </td>
                                          </tr>

                                          <tr>
                                            <th scope="row">
                                                <label class="col-form-label"> Email
                                                    <span style="color: red">*</span>
                                                </label>
                                            </th>
                                            <td>
                                                <div class="col-sm-8">
                                                    {{ $getRecord->email }}
                                                </div>
                                            </td>
                                          </tr>

                                          <tr>
                                            <th scope="row">
                                                <label class="col-form-label"> Phone Number
                                                    <span style="color: red">*</span>
                                                </label>
                                            </th>
                                            <td>
                                                <div class="col-sm-8">
                                                    {{ $getRecord->phone_number }}
                                                </div>
                                            </td>
                                          </tr>

                                          <tr>
                                            <th scope="row">
                                                <label class="col-form-label"> Hire Date
                                                    <span style="color: red">*</span>
                                                </label>
                                            </th>
                                            <td>
                                                <div class="col-sm-8">
                                                    {{ date('d-m-Y',strtotime($getRecord->hire_date)) }}
                                                </div>
                                            </td>
                                          </tr>

                                          <tr>
                                            <th scope="row">
                                                <label class="col-form-label"> Job ID
                                                    <span style="color: red">*</span>
                                                </label>
                                            </th>
                                            <td>
                                                <div class="col-sm-8">
                                                    {{ $getRecord->job_id }}
                                                </div>
                                            </td>
                                          </tr>

                                          <tr>
                                            <th scope="row">
                                                <label class="col-form-label"> Salary
                                                    <span style="color: red">*</span>
                                                </label>
                                            </th>
                                            <td>
                                                <div class="col-sm-8">
                                                    {{ $getRecord->salary }}
                                                </div>
                                            </td>
                                          </tr>

                                          <tr>
                                            <th scope="row">
                                                <label class="col-form-label"> Commision PCT
                                                    <span style="color: red">*</span>
                                                </label>
                                            </th>
                                            <td>
                                                <div class="col-sm-8">
                                                    {{ $getRecord->commission_pct }}
                                                </div>
                                            </td>
                                          </tr>

                                          <tr>
                                            <th scope="row">
                                                <label class="col-form-label"> Manager Name
                                                    <span style="color: red">*</span>
                                                </label>
                                            </th>
                                            <td>
                                                <div class="col-sm-8">
                                                    {{ $getRecord->manager_id }}
                                                </div>
                                            </td>
                                          </tr>

                                          <tr>
                                            <th scope="row">
                                                <label class="col-form-label">  Department Name
                                                    <span style="color: red">*</span>
                                                </label>
                                            </th>
                                            <td>
                                                <div class="col-sm-8">
                                                    {{ $getRecord->department_id }}
                                                </div>
                                            </td>
                                          </tr>

                                          <tr>
                                            <th scope="row">
                                                <label class="col-form-label">  Role Name
                                                    <span style="color: red">*</span>
                                                </label>
                                            </th>
                                            <td>
                                                <div class="col-sm-8">
                                                    {{ !empty($getRecord->is_role) ? 'HR' :'Employee' }}
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
                                    <a href="{{ url('admin/employee') }}" class="btn btn-default float-left">Back</a>
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
