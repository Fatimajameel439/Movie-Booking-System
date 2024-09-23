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
                            <form method="POST" action="{{ url('admin/store-movie') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Movie Name</label>
                                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputDescription" class="form-label">Movie Description</label>
                                    <textarea class="form-control" name="desc" id="exampleInputDescription" required></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputImage" class="form-label">Select Movie Image</label>
                                            <input class="form-control" name="image" type="file" id="exampleInputImage" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="exampleInputTrailer" class="form-label">Select Movie Trailer</label>
                                            <input class="form-control" name="trailer" type="file" id="exampleInputTrailer" required>
                                        </div>
                                    </div>
                                </div>
                                   
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection