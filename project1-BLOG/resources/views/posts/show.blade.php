@extends('layouts.app')
@section('title', $post['title'])
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-4" style="background: linear-gradient(135deg, #e0e0e0 0%, #bdbdbd 100%); box-shadow: 0 8px 24px rgba(80,80,80,0.3), 0 1.5px 3px rgba(80,80,80,0.15);">
                <div class="card-header text-white rounded-top-4" style="background: linear-gradient(135deg, #757575 0%, #616161 100%); box-shadow: 0 4px 12px rgba(80,80,80,0.2);">
                    <h2 class="mb-0">Title : {{ $post['title'] }}</h2>
                </div>
             
                <div class="card-body">
                    <div class="mt-4">
                        <span class="badge me-2" style="background: #bdbdbd; color: #212121;">Author: {{ $post["posted_by"] }}</span>
                        <span class="badge" style="background: #757575; color: #f5f5f5;">{{ \Carbon\Carbon::parse($post["created_at"])->format('F j, Y, g:i a') }}</span>
                    </div>
                    <hr>
                    <p class="fs-5" style="color: #424242;">{{ $post["desc"] }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection