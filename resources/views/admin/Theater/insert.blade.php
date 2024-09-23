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
                            <form method="POST" action="{{ url('admin/store-theater') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Theater Name</label>
                                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Theater Address</label>
                                    <input type="text" class="form-control" name="address" id="exampleInputPassword1" required>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <label for="statusSelect">Status</label>
                                        <select class="form-control" id="statusSelect" name="status">
                                            <option value="available">Available</option>
                                            <option value="unavailable">Unavailable</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Theater image</label>
                                        <input type="file" class="form-control" name="image" id="exampleInputPassword1" required>
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
</div>
@endsection