


@extends('layout.nave')

@section('title') Index @endsection
<div class="container">
  @section('content')

  <div class="text-right">
    <button type="button" class="btn btn-success">Create Post</button>
</div>


  

 <div class="mt-5 bg-red-600">

    <table class="table table-condensed mt-5">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Posted by</th>
          <th>Created At</th>
          <th>Action :</th>
        </tr>
      </thead>
      <tbody>
  
        @foreach ($allpost as $post)
        <tr>
        
          <td>{{$post['id']}}</td>
        
          <td>{{$post['title']}}</td>
          <td>{{$post['Posted_by']}}</td>
          <th>{{$post['Created_at']}}</th>
          <td><button type="button" class="btn btn-primary" >Update</button>
            <button type="button" class="btn btn-danger">Delete</button>
          <!--  <a href="{{ route('post.show',$post['id']) }}" class="btn btn-info">View a</a> -->

            <button type="button" class="btn btn-info" onclick="window.location='/post/{{$post['id']}}'">View</button>
</td>
        </tr>
        @endforeach
      </tbody>
    
    </table>
  
  
   
  
  
  
  </div>
 </div>


@endsection