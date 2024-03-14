
@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Regions</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6" style="text-align:right">
                        <a href="{{ url('admin/regions/add') }}" class="btn btn-primary">Add Regions</a>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <section class="content">
            <div class="container">
                <div class="row">
                    <section class="col-md-12">

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Search Regions </h3>

                            </div>

                            <form action="" method="get">
                                <div class="card-body">
                                    <div class="row">

                                        <div class="form-group col-md-2">
                                            <label for="">ID</label>
                                            <input type="text" class="form-control" value="{{ Request()->id }}" name="id" placeholder="ID">
                                        </div>

                                        <div class="form-group col-md-2">
                                            <label for="">Region Name</label>
                                            <input type="text" class="form-control" value="{{ Request()->region_name }}" name="region_name" placeholder="Region Name">
                                        </div>

                                        <div class="form-group col-md-4">
                                            <button type="submit" class="btn btn-primary" style="margin-top: 30px">Search</button>
                                            <a href="{{ url('admin/regions') }}" class="btn btn-success" style="margin-top: 30px">Reset</a>
                                        </div>

                                    </div>
                                </div>
                            </form>

                        </div>

                        @include('_message')


                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Regions List</h3>
                            </div>

                            <div class="card-body p-0">
                                <table class="table table-striped">

                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Regions Name</th>
                                        <th>Created at</th>
                                        <th>Updated at</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @forelse($getRecord as $value)
                                        <tr>
                                            <th>{{ $value->id }}</th>
                                            <th>{{ $value->region_name }}</th>
                                            <th>{{ date('d-m-Y', strtotime($value->created_at)) }}</th>
                                            <th>{{ date('d-m-Y', strtotime($value->updated_at)) }}</th>
                                            <th>
                                                <a href="{{ url('admin/regions/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ url('admin/regions/delete/'.$value->id) }}" onclick="return confirm('Are You Confirm To Delete ?')" class="btn btn-danger">Delete</a>
                                            </th>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="100%">No Record Found</td>
                                        </tr>
                                    @endforelse


                                    </tbody>

                                </table>
                            </div>

                            {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}

                        </div>

                    </section>
                </div>
            </div>
        </section>

        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection



