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
                         @dd($data_of_posts) this is used to debug and see the content of the variable
                        --}}
                @foreach ($data_of_posts as $post)
                <tr>
                    <th>{{ $post['id'] }}</th>
                    <td>{{ $post['title'] }}</td>
                    <td>{{ $post['posted_by'] }}</td>
                    <td>{{ $post['created_at'] }}</td>
                    <td>
                        <a href="{{route('posts.show',$post['id'])}}" type=" button" class="btn btn-info">View</a>
                        <a href="{{route('posts.edit',$post['id'])}}" type=" button" class="btn btn-primary">Edit</a>

                        <form style="display:inline" method="POST" action="{{route('posts.destroy',$post['id'])}}">
                            @csrf
                            @Method("DELETE")
                            <button type=" submit" class="btn btn-danger">Delete</button>
                        </form>



                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
</body>
@endsection