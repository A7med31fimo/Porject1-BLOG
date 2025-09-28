@extends('layouts.app')

@section('content')
<div class="container my-4">

    {{-- Tech Banner Image --}}
    <div class="text-center mb-4">
        <h2 class="mt-3 fw-bold text-secondary">🚀 Welcome to the Tech Blog</h2>
        <p class="text-muted">Explore the latest posts, insights, and innovations in technology</p>
    </div>

    {{-- Add Post Button --}}
    <div class="d-flex justify-content-center mb-4">
        <a href="{{ route('posts.create') }}" class="btn btn-secondary">Add Post</a>
    </div>

    {{-- Posts Table --}}
    <div class="d-flex justify-content-center">
        <div style="min-width: 400px; max-width: 1200px; width: 100%;">
            <table class="table table-hover text-center align-middle shadow-sm">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#Likes</th>
                        <th scope="col">Title</th>
                        <th scope="col">Posted By</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($posts as $post)
                    <tr>
                        <th>{{ $post->likes_count }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->created_at->format('Y-m-d') }}</td>
                        <td>
                            <a href="{{route('posts.show',$post->id)}}" class="btn btn-info btn-sm">View</a>


                            @if(Auth::check() && Auth::id() === $post->user_id)
                            <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary btn-sm">Edit</a>

                            <form id="deleteForm{{$post->id}}" style="display:inline" method="POST" action="{{route('posts.destroy',$post->id)}}">
                                @csrf
                                @method("DELETE")
                                <button type="button" class="btn btn-danger btn-sm" onclick="confirmDelete({{$post['id']}})">Delete</button>
                                @endif

                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">No posts found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

            {{-- Pagination --}}
            <div class="d-flex justify-content-center">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>

<script>
    function confirmDelete(id) {
        Swal.fire({
            title: "⚠️ Are you sure?",
            text: "This action cannot be undone!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#e3342f",
            cancelButtonColor: "#6c757d",
            confirmButtonText: "Yes, Delete it",
            cancelButtonText: "Cancel"
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById("deleteForm" + id).submit();
            }
        });
    }
</script>
@endsection