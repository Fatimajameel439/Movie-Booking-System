@extends('admin.master')

@section('content')
    <div class="content-body default-height">
        <div class="container-fluid">

            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Date/Time</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Date/Time</a></li>
                </ol>
            </div>

            <!-- row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>Fetch Showtimes</h2>
                            <a href="{{ url('admin/insert-showtime') }}" class="btn btn-primary">Add Date/Time</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Movie</th>
                                            <th>Theater</th>
                                            <th>Show Date</th>
                                            <th>Show Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $i = 1; @endphp
                                        @foreach ($showtimes as $showtime)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $showtime->movie->name }}</td>
                                                <td>{{ $showtime->theater->name }}</td>
                                                <td>{{ $showtime->show_date }}</td>
                                                <td>{{ $showtime->show_time }}</td>
                                                <td>
                                                    <a href="{{ url('admin/edit-showtime', $showtime->id) }}"
                                                        class="btn btn-warning">Edit</a>
                                                    <a href="{{ url('admin/delete-showtime', $showtime->id) }}"
                                                        class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
