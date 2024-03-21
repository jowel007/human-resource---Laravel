
@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Countries</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Add</a></li>
                            <li class="breadcrumb-item active">Countries List</li>
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
                                <h6 >Add Countries</h6>
                            </div>

                            <form  class="form-horizontal" method="POST" accept="{{ url('admin/countries/add') }}" enctype="multipart/form-data">

                                @csrf

                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Country Name
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <input  type="text" name="country_name" value="{{ old('country_name') }}" class="form-control"  placeholder="Enter Country name" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label"> Regions
                                            <span style="color: red">*</span>
                                        </label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="regions_id" required>
                                                <option value="">Selected Region Name</option>
                                                @foreach($getRegions as $value)
                                                <option value="{{ $value->id }}">{{ $value->region_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                </div>

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-success float-right">Submit</button>
                                    <a href="{{ url('admin/countries') }}" class="btn btn-default float-left">Reset</a>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection

