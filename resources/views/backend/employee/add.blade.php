
@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Employee</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Add</a></li>
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
                                <h6 >Add Employee</h6>
                            </div>

                            <form  class="form-horizontal" method="POST" accept="{{ url('admin/employee/add') }}" enctype="multipart/form-data">

                                @csrf

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> First Name
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <input  type="text" name="name" value="{{ old('name') }}" class="form-control" required placeholder="Enter First Name" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> last Name
                                            <span style="color: red"></span>
                                        </label>
                                        <div class="col-sm-8">
                                            <input  type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" required placeholder="Enter Last Name">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Email ID
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <input  type="text" name="email" value="{{ old('email') }}" required class="form-control" required placeholder="Enter Email ID">
                                            <span style="color: red">{{ $errors->first('email') }}</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Phone
                                            <span style="color: red"></span>
                                        </label>
                                        <div class="col-sm-8">
                                            <input  type="text" name="phone_number" value="{{ old('phone_number') }}" class="form-control" required placeholder="Enter Phone Number">
                                            <span style="color: red">{{ $errors->first('phone_number') }}</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Hire Date
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <input  type="date" name="hire_date" value="{{ old('hire_date') }}" required class="form-control" required placeholder="Enter Hire Date">
                                            <span style="color: red">{{ $errors->first('hire_date') }}</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Job Title
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="job_id" required>
                                                <option value="">Select job Title</option>
                                                <option value="1">Web Design</option>
                                                <option value="2">Web Developer</option>
                                            </select>
                                        </div>
                                    </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"> Salary
                                                <span style="color: red">*</span>
                                            </label>
                                            <div class="col-sm-8">
                                                <input  type="text" name="salary" value="{{ old('salary') }}" class="form-control" required placeholder="Enter Salary">
                                                <span style="color: red">{{ $errors->first('salary') }}</span>
                                            </div>
                                        </div>


                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Commission %
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <input  type="text" name="commission_pct" value="{{ old('commission_pct') }}" class="form-control" required placeholder="Enter Salary">
                                            <span style="color: red">{{ $errors->first('commission_pct') }}</span>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Manager Name
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="manager_id" required>
                                                <option value="">Select Manager Name</option>
                                                <option value="1">XYZ </option>
                                                <option value="2">ABC</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Department
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="department_id" required>
                                                <option value="">Select Department Name</option>
                                                <option value="1">Web </option>
                                                <option value="2">Mobile</option>
                                                <option value="2">Digital Marketing</option>
                                                <option value="2">Wordpress</option>
                                                <option value="2">AI</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success float-right">Submit</button>
                                    <a href="{{ url('admin/employee') }}" class="btn btn-default float-left">Reset</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection












