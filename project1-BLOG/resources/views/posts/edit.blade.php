@extends('layouts.app')
@section('title')
Edit Post
@endsection
@section('content')
<style>
    .edit-post-container {
        max-width: 500px;
        margin: 40px auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
        padding: 32px 24px;
        font-family: 'Segoe UI', Arial, sans-serif;
    }

    .edit-post-container h1 {
        text-align: center;
        color: #2d3748;
        margin-bottom: 16px;
    }

    .edit-post-container .info {
        background: #e6f7ff;
        color: #3178c6;
        padding: 12px;
        border-radius: 6px;
        margin-bottom: 24px;
        font-size: 15px;
    }

    .edit-post-container label {
        display: block;
        margin-bottom: 6px;
        font-weight: 500;
        color: #4a5568;
    }

    .edit-post-container input[type="text"],
    .edit-post-container textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #cbd5e1;
        border-radius: 6px;
        margin-bottom: 18px;
        font-size: 15px;
        background: #f7fafc;
    }

    .edit-post-container textarea {
        min-height: 80px;
        resize: vertical;
    }

    .edit-post-container button {
        width: 100%;
        background: #3182ce;
        color: #fff;
        border: none;
        padding: 12px;
        border-radius: 6px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s;
    }

    .edit-post-container button:hover {
        background: #2563eb;
    }
</style>
<div class="edit-post-container">
    <h1>Edit Post</h1>
    <form method="POST" Action="{{ route('posts.update',$post->id) }}">
        @csrf
        @method("PUT")
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" value="{{$post['title']}}" name="title" required>
        </div>
        <div>
            <label for="desc">Description</label>
            <textarea id="desc" name="desc" required>{{$post['desc']}}</textarea>
        </div>
        <div style="margin-bottom: 18px;">
            <label for="edit_by" style="display: block; margin-bottom: 6px; font-weight: 500; color: #4a5568;">
                Edit By
            </label>
            <select id="edit_by" name="edit_by" required
                style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 15px; background: #f7fafc;">
                <!-- <option disabled selected>Choose editor</option> -->
                @foreach ($users as $user)
                <!-- <option @if ($user->id==$post->user_id) selected @endif value="{{$user->id}}">{{$user->name}}</option> -->
                <option @selected($user->id==$post->user_id) value="{{$user->id}}">{{$user->name}}</option>

                @endforeach
            </select>
        </div>
        <button type="submit" style="margin-top: 12px;color: #fff;background: #798691ff;border: none;padding: 12px;border-radius: 6px;font-size: 16px;font-weight: 600;cursor: pointer;transition: background 0.9s;">Update Post</button>
    </form>
</div>
@endsection