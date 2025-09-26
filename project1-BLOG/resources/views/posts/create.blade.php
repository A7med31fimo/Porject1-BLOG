@extends('layouts.app')
@section('title')
Create Post
@endsection
@section('content')
<style>
    .create-post-container {
        max-width: 500px;
        margin: 40px auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
        padding: 32px 24px;
        font-family: 'Segoe UI', Arial, sans-serif;
    }

    .create-post-container h1 {
        text-align: center;
        color: #2d3748;
        margin-bottom: 16px;
    }

    .create-post-container .info {
        background: #e6f7ff;
        color: #3178c6;
        padding: 12px;
        border-radius: 6px;
        margin-bottom: 24px;
        font-size: 15px;
    }

    .create-post-container label {
        display: block;
        margin-bottom: 6px;
        font-weight: 500;
        color: #4a5568;
    }

    .create-post-container input[type="text"],
    .create-post-container textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #cbd5e1;
        border-radius: 6px;
        margin-bottom: 18px;
        font-size: 15px;
        background: #f7fafc;
    }

    .create-post-container textarea {
        min-height: 80px;
        resize: vertical;
    }

    .create-post-container button {
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

    .create-post-container button:hover {
        background: #2563eb;
    }
</style>
<div class="create-post-container">
    <h1>Create Post</h1>
    <div class="info">
        Please fill in the title and description for your new post.<br>
        Make sure your content is clear and relevant. You can edit or delete your post later.
    </div>
    <form action="{{ route('posts.index') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="desc">Description</label>
            <textarea id="desc" name="desc" required></textarea>
        </div>
        <div style="margin-bottom: 18px;">
            <label for="created_by" style="display: block; margin-bottom: 6px; font-weight: 500; color: #4a5568;">
                Created By
            </label>
            <select id="created_by" name="created_by" required
                style="width: 100%; padding: 10px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 15px; background: #f7fafc;">
                <option disabled selected>Choose Creator</option>
                <option value="1">Ahmed</option>
                <option value="2">Anonymous</option>
            </select>
        </div>
        <button type="submit" style="margin-top: 12px;color: #fff;background: #798691ff;border: none;padding: 12px;border-radius: 6px;font-size: 16px;font-weight: 600;cursor: pointer;transition: background 0.9s;">Create Post</button>
    </form>
</div>
@endsection