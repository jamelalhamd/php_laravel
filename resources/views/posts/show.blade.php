@extends('layout.nave')

@section('title') post @endsection


@section('content')
<div class="container">
    @section('content')
  
    <div class="card mt-3">
        <div class="card-header">
            Post Information
        </div>
        <div class="card-body">
            <h5 class="card-title">Title: {{ $singlepost['title'] }}</h5>
            <p class="card-text">ID: {{ $singlepost['id'] }}</p>
        </div>
    </div>

    <!-- Post Creator Info Card -->
    <div class="card mt-3">
        <div class="card-header">
            Post Creator Information
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $singlepost['Posted_by'] }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Email: j_hamel@hotmail.com</h6>
            <p class="card-text">Created at: {{ $singlepost['Created_at'] }}</p>
        </div>
    </div>
    
  </div>
@endsection