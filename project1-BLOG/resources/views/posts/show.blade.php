@extends('layouts.app')
@section('title') Show @endsection
@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-4"
                style="background: linear-gradient(135deg, #e0e0e0 0%, #bdbdbd 100%);
                       box-shadow: 0 8px 24px rgba(80,80,80,0.3), 0 1.5px 3px rgba(80,80,80,0.15);">

                <!-- Header -->
                <div class="card-header text-white rounded-top-4"
                    style="background: linear-gradient(135deg, #757575 0%, #616161 100%);
                           box-shadow: 0 4px 12px rgba(80,80,80,0.2);">
                    <h2 class="mb-0">Title : {{ $post->title }}</h2>
                </div>

                <!-- Body -->
                <div class="card-body">
                    <div class="mt-4">
                        <h4>Post Creator Info</h4>
                        <span class="badge me-2" style="background: #fdfdfd; color: #de6868;">Author: {{ $post->user->name}}</span>
                        <span class="badge" style="background: #fdfdfd; color: #de6868;">Email: {{ $post->user->email }}</span>
                        <span class="badge" style="background: #fdfdfd; color: #de6868;">Last Updated: {{ \Carbon\Carbon::parse($post["created_at"])->format('F j, Y, g:i a') }}</span>
                    </div>
                    <hr>
                    <h3>Description</h3>
                    <p class="fs-5" style="color: #424242;">
                        {{ $post->desc }}
                    </p>
                </div>

                <!-- Footer with Like -->
                <div class="card-footer d-flex align-items-center justify-content-end gap-2"
                    style="background: linear-gradient(135deg, #757575 0%, #616161 100%);
                           border-bottom-left-radius: 1rem; 
                           border-bottom-right-radius: 1rem;">

                    @if($post->likes()->where('user_id', Auth::id())->exists())
                    <!-- Unlike -->
                    <form method="POST" action="{{ route('posts.unlike', $post) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn border-0 bg-transparent p-0">
                            <i class="fas fa-heart" style="color: red; font-size: 1.8rem;"></i>
                        </button>
                    </form>
                    @else
                    <!-- Like -->
                    <form method="POST" action="{{ route('posts.like', $post) }}">
                        @csrf
                        <button type="submit" class="btn border-0 bg-transparent p-0">
                            <i class="far fa-heart" style="color: white; font-size: 1.8rem;"></i>
                        </button>
                    </form>
                    @endif

                    <span class="text-light ms-1 fw-bold">
                        {{ $post->likes()->count() }}
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection