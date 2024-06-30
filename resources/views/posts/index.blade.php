<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>



  
<div class="container">


  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Jamel </a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">All Post</a></li>
    
      </ul>
      <div class="container mt-5  text-center"><div class="text-left"> <button type="button" class="btn btn-success">Create Post</button></div></div>
    </div>
   
  </nav>


  

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
          <td><button type="button" class="btn btn-primary">Update</button>
            <button type="button" class="btn btn-danger">Delete</button>
            <button type="button" class="btn btn-info">View</button></td>
        </tr>
        @endforeach
      </tbody>
    
    </table>
  
  
   
  
  
  
  </div>
 </div>
</body>
</html>