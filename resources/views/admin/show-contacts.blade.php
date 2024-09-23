@extends('admin.master')
@section('content')
<div class="content-body default-height">
    <div class="container-fluid">

        <div class="row page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Contacts</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">All Contacts</a></li>
            </ol>
        </div>

        <!-- row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>All Contacts</h2>
                        <h3>comments({{$contactscount}})</h3>
                    </div>
                    <div class="card-body">
                        @foreach($contacts as $contact)
                        <li class="single-comment" style="background: aliceblue">
                            <div class="comment-body" style="padding: 10px;">
                                <div class="comment-content">
                                    <div class="comment-header">
                                        <h3 class="comment-title" style="color: black !important">{{ $contact->name }}</h3>
                                    </div>
                                    <p>{{ $contact->comment }}</p>
                                    <div class="comment-email"><a href="mailto:{{$contact->email}}" style="color: #7e7e7e !important"><i class="bi bi-envelope"></i>&nbsp;&nbsp;  {{ $contact->email }}</a></div>

                                    <div class="blog-details-reply-box">
                                        <div class="comment-time"><i class="bi bi-clock"></i>&nbsp;&nbsp;  {{ $contact->created_at->diffForHumans() }}</div>
                                        <div class="comment-reply">
                                            
                                            {{-- <a href="#" class="reply"><i class="bi bi-reply"></i> reply</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection