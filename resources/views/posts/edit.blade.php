@extends('layout.nave')

@section('title') Edit Post @endsection

@section('content')
<div class="container mt-5">
    <h2>Edit Post</h2>
    <form method="POST" action="{{ route('post.update', 1) }}">
        @csrf
        @method('PUT') <!-- Assuming this is for updating an existing post -->

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" rows="5" id="description" name="description">{{ old('description') }}</textarea>
        </div>

        <div class="mb-3">
            <label for="creator" class="form-label">Created by:</label>
            <input type="text" class="form-control" id="creator" placeholder="Enter creator" name="creator" value="{{ old('creator') }}">
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection
