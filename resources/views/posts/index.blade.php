


@extends('layout.nave')

@section('title') Index @endsection
<div class="container">
  @section('content')

  <div class="text-right">
    <button type="button" onclick="window.location='{{ route('post.create') }}'" class="btn btn-success">Create Post</button>
  </div>
</div>


  

 <div class="mt-5 bg-red-600">

    <table class="table table-condensed mt-5">
      <thead>
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Posted by</th>
          <th>Description</th>
          <th>Created At</th>
          <th>Action :</th>
        </tr>
      </thead>
      <tbody>
  
        @foreach ($posts as $post)
        <tr>
        
          <td>{{$post['id']}}</td>
        
          <td>{{$post['title']}}</td>
          <td>{{$post['description']}}</td>
          <td>{{$post['creater']}}</td>
          <th>{{$post['created_at']}}</th>
          <td>
         
          
            
            <a href="{{ route('post.edit',$post['id']) }}" class="btn btn-primary">Edit </a> 
            <a href="{{ route('post.show',$post['id']) }}" class="btn btn-info">View </a> 
            <form style="display: inline;" method="POST" action="{{ route('post.delete', $post['id']) }}">
              @csrf
              @method('DELETE')
              <script type="text/javascript">
                function confirmDelete() {
                    return confirm('Are you sure you want to delete this post?');
                }
            </script>
              <button type="submit" onclick="confirmDelete()"   class="btn btn-danger">Delete</button>
          </form>
        
      


</td>
        </tr>
        @endforeach
      </tbody>
    
    </table>
  
  
   
  
  
  
  </div>
 </div>


@endsection