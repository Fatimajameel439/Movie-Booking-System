@extends('admin.master')
@section('content')
    <div class="content-body default-height">
        <div class="container-fluid">

            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Bookings</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">All Bookings</a></li>
                </ol>
            </div>

            <!-- row -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2>All Bookings</h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>User Name</th>
                                            <th>Email</th>
                                            <th>No Of Tickets</th>
                                            <th>Class</th>
                                            <th>contact No</th>
                                            <th>Age</th>
                                            <th>Movie</th>
                                            <th>Theater</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Booking_number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($bookings as $booking)
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $booking->name }}</td>
                                                <td>{{ $booking->email }}</td>
                                                <td>{{ $booking->tickets }}</td>
                                                <td>{{ $booking->class }}</td>
                                                <td>{{ $booking->contact }}</td>
                                                <td>{{ $booking->age }}</td>
                                                <td>{{ $booking->movie }}</td>
                                                <td>{{ $booking->theater }}</td>
                                                <td>{{ $booking->date }}</td>
                                                <td>{{ $booking->time }}</td>
                                                <td>{{ $booking->booking_number }}</td>
                                             
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
