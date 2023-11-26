
@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Employee</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6" style="text-align:right">
                        <a href="{{ url('admin/employee/add') }}" class="btn btn-primary">Add Employees</a>
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
                            <h3 class="card-title">Search Employee</h3>

                        </div>

                        <form action="" method="get">
                            <div class="card-body">
                                <div class="row">

                                    <div class="form-group col-md-1">
                                        <label for="">ID</label>
                                        <input type="text" class="form-control" value="{{ Request()->id }}" name="id" placeholder="ID">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="">First Name</label>
                                        <input type="text" class="form-control" value="{{ Request()->name }}" name="name" placeholder="First Name">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="">Last Name</label>
                                        <input type="text" class="form-control" value="{{ Request()->last_name }}" name="last_name" placeholder="Last Name">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control" value="{{ Request()->email }}" name="email" placeholder="Email">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <button type="submit" class="btn btn-primary" style="margin-top: 30px">Search</button>
                                        <a href="{{ url('admin/employee') }}" class="btn btn-success" style="margin-top: 30px">Reset</a>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>

                    @include('_message')

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Employee List</h3>
                        </div>

                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($getRecord as $value)
                                        <tr>
                                            <td>{{ $value->id }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->last_name }}</td>
                                            <td>{{ $value->email }}</td>
                                            <td>{{ !empty($value->is_role) ? 'HR' :'Employee' }}</td>
                                            <td>
                                                <a href="{{ url('admin/employee/view/'.$value->id) }}" class="btn btn-info">View</a>
                                                <a href="{{ url('admin/employee/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="" class="btn btn-danger">Delete</a>
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

