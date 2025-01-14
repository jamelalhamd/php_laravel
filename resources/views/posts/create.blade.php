@extends('layout/nave')

@section('title') Create Post @endsection
<div class="container mt-5" >

    @section('content')


    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form method="post" action="{{route('post.store')}}">
       
        @csrf
        <div class="mb-3">
     
            <label for="pwd1" class="form-label">Title</label>
            <input type="text" class="form-control" id="pwd1" placeholder="Enter Title" name="title" >
          </div>
        <div> 
            <label for="comment">Description:</label>
    <textarea class="form-control" rows="5" id="comment" name="description" ></textarea>
        </div>
    
        <div class="mb-3">
            <label for="pwd" class="form-label">Creater by:</label>
            <input type="text" class="form-control" id="pwd" placeholder="Enter creater" name="creater" >
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    
      
    

</div>    @endsection