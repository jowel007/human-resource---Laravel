
@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Countries</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6" style="text-align:right">

                        <a href="{{ url('admin/countries/add') }}" class="btn btn-primary">Add Countries</a>

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
                                <h3 class="card-title">Search Countries</h3>

                            </div>

                        </div>

                        @include('_message')

                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Countries List</h3>
                            </div>

                            <div class="card-body p-0">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Country Name</th>
                                        <th>Regions Name</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @forelse($getRecord as $value)
                                        <tr>
                                            <td>{{ $value->id }}</td>
                                            <td>{{ $value->country_name }}</td>
                                            <td>{{ !empty($value->get_region_name->region_name) ? $value->get_region_name->region_name : '' }}</td>
                                            <td>{{ date('d-m-Y H:i:s', strtotime($value->created_at)) }}</td>
                                            <td>{{ date('d-m-Y H:i:s', strtotime($value->updated_at)) }}</td>
                                            <td>
                                                <a href="{{ url('admin/jobs/view/') }}" class="btn btn-info">View</a>
                                                <a href="{{ url('admin/jobs/edit/') }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ url('admin/jobs/delete/') }}" onclick="return confirm('Are You Confirm To Delete ?')" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="100%">No Record Found.</td>
                                        </tr>
                                    @endforelse


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



