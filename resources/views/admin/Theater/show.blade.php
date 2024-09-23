@extends('admin.master')
@section('content')
    <div class="content-body default-height">
        <div class="container-fluid">

            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Theaters</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Theaters</a></li>
                </ol>
            </div>

            <!-- row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Fetch Record</h2>
                            <a href="{{ url('admin/insert-theater') }}" class="btn btn-primary">Add Record</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Theater Name</th>
                                            <th>Theater Address</th>
                                            <th>Theater Status</th>
                                            <th>Theater image</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($theaters as $theater)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $theater->name }}</td>
                                                <td>{{ $theater->address }}</td>
                                                <td>{{ $theater->status }}</td>
                                                <td><img src="{{asset($theater->image)}}" alt="" height="100"></td>

                                                <td>
                                                    <a href="{{ url('admin/edit-theater', $theater->id) }}"
                                                        class="btn btn-warning">Edit</a>
                                                    <a href="{{ url('admin/delete-theater', $theater->id) }}"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
