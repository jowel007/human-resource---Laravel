

@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Regions</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Add</a></li>
                            <li class="breadcrumb-item active">Regions List</li>
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
                                <h6 >Add Regions</h6>
                            </div>

                            <form  class="form-horizontal" method="POST" href="{{ url('admin/regions/add') }}" enctype="multipart/form-data">

                                @csrf

                                <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"> Region Name
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-9">
                                            <input  type="text" name="region_name" value="{{ old('region_name') }}" class="form-control"  placeholder="Enter Region Name" required>
                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success float-right">Submit</button>
                                    <a href="{{ url('admin/regions') }}" class="btn btn-default float-left">Back</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
