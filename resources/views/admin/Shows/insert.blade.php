@extends('admin.master')
@section('content')

<div class="content-body default-height">
    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Insert Record</h1>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ url('admin/store-showtime') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="movie_id">Movie</label>
                                    <select class="form-control" id="movie_id" name="movie_id" required>
                                        <option value="" selected disabled>Select Movie</option>
                                        @foreach($movies as $movie)
                                        <option value="{{ $movie->id }}">{{ $movie->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="theater_id">Theater</label>
                                    <select class="form-control" id="theater_id" name="theater_id" required>
                                        <option value="" selected disabled>Select Theater</option>
                                        @foreach($theaters as $theater)
                                        <option value="{{ $theater->id }}">{{ $theater->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="show_date">Show Date</label>
                                    <input type="date" class="form-control" id="show_date" name="show_date" required>
                                </div>

                                <div class="form-group">
                                    <label for="show_time">Show Time</label>
                                    <input type="time" class="form-control" id="show_time" name="show_time" required>
                                </div>

                                <button type="submit" class="btn btn-primary">Add Date/Time</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
@endsection