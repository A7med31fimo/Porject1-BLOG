@extends('layouts.app');
@section('content')
<div class="d-flex justify-content-center my-4">
    <a href="{{ route('posts.create') }}" class="btn btn-secondary">Add Post</a>
</div>
<div class="d-flex justify-content-center">
    <div style="min-width: 400px; max-width: 1200px; width: 100%;">
        <table class="table table-hover text-center align-middle">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">title</th>
                    <th scope="col">Posted By</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                {{--
                         @dd($posts) this is used to debug and see the content of the variable
                        --}}
                @foreach ($posts as $post)
                {{-- @dd($posts,$post);--}}
                <tr>
                    <th>{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $users[($post->user_id)-1]->name}}</td>
                    <td>{{ $post->created_at->format('Y-m-d') }}</td>
                    <td>
                        <a href="{{route('posts.show',$post->id)}}" type=" button" class="btn btn-info">View</a>
                        <a href="{{route('posts.edit',$post->id)}}" type=" button" class="btn btn-primary">Edit</a>

                        <form id="deleteForm{{$post->id}}" style="display:inline" method="POST" action="{{route('posts.destroy',$post->id)}}">
                            @csrf
                            @method("DELETE")
                            <button type="button" class="btn btn-danger" onclick="confirmDelete({{$post['id']}})">Delete</button>
                        </form>
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


                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
</body>
@endsection