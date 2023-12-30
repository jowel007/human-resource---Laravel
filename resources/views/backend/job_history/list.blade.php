
@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Jobs History</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6" style="text-align:right">
                        <a href="{{ url('admin/job_history/add') }}" class="btn btn-primary">Add Job History</a>
                        {{-- <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">List</a></li>
                            <li class="breadcrumb-item active">Employee List</li>
                        </ol> --}}
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

 

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection


