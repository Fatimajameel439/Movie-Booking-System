@extends('master')
@section('content')

    <div class="content-body default-height">
        <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    {{-- <h2 class="upcoming" style="    color: #ffffff; margin-bottom: 40px; margin-top: 10px; background: #2f80ed; padding: 10px 25px;">Available Movies</h2> --}}
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 1345px; color:white;">
                                <thead>
                                    <tr>
                                        <th style="padding-bottom: 28px">ID</th>
                                        <th style="padding-bottom: 28px">Movie</th>
                                        <th style="padding-bottom: 28px">Theater</th>
                                        <th style="padding-bottom: 28px">Show Date</th>
                                        <th style="padding-bottom: 28px">Show Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $i = 1; @endphp
                                    @foreach ($showtimes as $showtime)
                                        <tr>
                                            <td style="line-height: 3">{{ $i++ }}</td>
                                            <td>{{ $showtime->movie->name }}</td>
                                            <td>{{ $showtime->theater->name }}</td>
                                            <td>{{ $showtime->show_date }}</td>
                                            <td>{{ $showtime->show_time }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <h2 class="upcoming" style="    color: #ffffff; margin-bottom: 40px; margin-top: 10px; background: #2f80ed; padding: 10px 25px;">Upcoming Movies</h2>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 1345px; color:white;">
                                <thead>
                                    <tr>
                                        <th style="padding-bottom: 28px">ID</th>
                                        <th style="padding-bottom: 28px">Movie</th>
                                        <th style="padding-bottom: 28px">Theater</th>
                                        <th style="padding-bottom: 28px">Show Date</th>
                                        <th style="padding-bottom: 28px">Show Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td style="line-height: 3">1</td>
                                            <td>Alice In Wonderland</td>
                                            <td>Best Comfirt</td>
                                            <td>2024-09-10</td>
                                            <td>12:00:00</td>
                                        </tr>
                                        <tr>
                                            <td style="line-height: 3">2</td>
                                            <td>Princess Cursed In Time</td>
                                            <td>StarLight Theater</td>
                                            <td>2024-10-01</td>
                                            <td>01:30:00</td>
                                        </tr>
                                        <tr>
                                            <td style="line-height: 3">3</td>
                                            <td>Warcraft</td>
                                            <td>FilmHaven</td>
                                            <td>2024-10-15</td>
                                            <td>05:00:00</td>
                                        </tr>
                                        <tr>
                                            <td style="line-height: 3">4</td>
                                            <td>UnderWorld</td>
                                            <td>luxury theater</td>
                                            <td>2024-10-30</td>
                                            <td>03:00:00</td>
                                        </tr>
                                        <tr>
                                            <td style="line-height: 3">5</td>
                                            <td>Uncharted</td>
                                            <td>StarLight Theater</td>
                                            <td>2024-11-05</td>
                                            <td>02:50:00</td>
                                        </tr>
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
