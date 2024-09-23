@extends('admin.master')
@section('content')
    <div class="content-body default-height">
        <div class="container-fluid">

            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Movies</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Movies</a></li>
                </ol>
            </div>

            <!-- row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>All Movies</h2>
                            <a href="{{ url('admin/insert-movie') }}" class="btn btn-primary">Add Record</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Movie Name</th>
                                            <th>Movie Description</th>
                                            <th>Movie Image</th>
                                            <th>Movie Trailer</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($movies as $movie)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $movie->name }}</td>
                                                <td>{{ $movie->desc }}</td>
                                                <td><img src="{{asset($movie->image)}}" alt="" height="100"></td>
                                                <td><video src="{{asset($movie->trailer)}}" autoplay loop muted height="100" ></td>
                                                
                                                <td>
                                                    <a href="{{ url('admin/edit-movie', $movie->id) }}"
                                                        class="btn btn-warning mb-3" >Edit</a>
                                                    <a href="{{ url('admin/delete-movie', $movie->id) }}"
                                                        class="btn btn-danger mb-3">Delete</a>
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
