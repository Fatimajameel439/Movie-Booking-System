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
                            <form method="POST" action="{{ url('admin/update-theater', $theaters->id) }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Theater Name</label>
                                    <input type="text" value="{{ $theaters->name }}" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Theater Address</label>
                                    <input type="text" value="{{ $theaters->address }}" class="form-control" name="address" id="exampleInputPassword1">
                                </div>
                                <div class="form-group">
                                    <label for="statusSelect">Status</label>
                                    <select class="form-control" id="statusSelect" name="status">
                                        <option value="available" {{ $theaters->status == 'available' ? 'selected' : '' }}>Available</option>
                                        <option value="unavailable" {{ $theaters->status == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
                                    </select>
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