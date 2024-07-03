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

            <h4 class="card-title">Title : {{ $singlepost['title'] }}</h4>
            <h5 class="card-text">ID: {{ $singlepost['id'] }}</h5>
        </div>
    </div>

    <!-- Post Creator Info Card -->
    <div class="card mt-3">
        <div class="card-header">
            Post Creator Information
        </div>
        <div class="card-body">
            <p class="card-title">{{ $singlepost['description'] }}</p>
            <h3 class="card-subtitle mb-2 text-muted">creater {{ $singlepost['creater'] }}</h3>
            <p class="card-text">Created at: {{ $singlepost['created_at'] }}</p>
        </div>
    </div>
    
  </div>
@endsection