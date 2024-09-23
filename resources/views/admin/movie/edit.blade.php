@extends('admin.master')
@section('content')
<div class="content-body default-height">
    <div class="container-fluid">

        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h1>Edit Record</h1>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="POST" action="{{ url('admin/update-movie', $movies->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Movie Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $movies->name }}" id="exampleInputEmail1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputDescription" class="form-label">Movie Description</label>
                                    <textarea class="form-control" name="desc" id="exampleInputDescription" required>{{ $movies->desc }}</textarea>
                                </div>
                              
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputImage" class="form-label">Select Movie Image</label>
                                            <input class="form-control" name="image" type="file" id="exampleInputImage">
                                            <img src="{{asset($movies->image)}}" alt="" height="100" class="mt-3">

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputTrailer" class="form-label">Select Movie Trailer</label>
                                            <input class="form-control" name="trailer" type="file" id="exampleInputTrailer">
                                            <video src="{{asset($movies->trailer)}}" autoplay loop muted height="100" class="mt-3">

                                        </div>
                                    </div>
                                    
                                </div>
                                <button type="submit" class="btn btn-primary" style="padding: 10px 40px;">Edit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection