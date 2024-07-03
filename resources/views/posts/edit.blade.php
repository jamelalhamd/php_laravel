@extends('layout.nave')

@section('title') Edit Post @endsection


<div class="container mt-5">
    @section('content')
    <h2>Edit Post</h2>
    <form method="POST" action="{{ route('post.update', $post->id) }}">
        @csrf
        @method('PUT') <!-- Assuming this is for updating an existing post -->

        <div class="mb-3">
            <label for="title" class="form-label">{{$post->id}}</label>

            <input type="text" class="form-control" id="title" placeholder="Enter Title" name="title" value="{{$post->title}}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" rows="5" id="description" name="description"> {{$post->description}}</textarea>
        </div>

        <div class="mb-3">
            <label for="creater" class="form-label">Created by:</label>
            <input type="text" class="form-control" id="creater" placeholder="Enter creater" name="creater" value={{$post->creater}}>
        </div>

        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection
