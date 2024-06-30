<!DOCTYPE html>
<html lang="en">
<head>
  <title>Show Post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Website Name</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">All Posts</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Post Info Card -->
    <div class="card mt-3">
      <div class="card-header">
        Post Information
      </div>
      <div class="card-body">
        <h5 class="card-title">Title: {{$singlepost['title']}}</h5>
        <p class="card-text">ID: {{$singlepost['id']}}</p>
      </div>
    </div>

    <!-- Post Creator Info Card -->
    <div class="card mt-3">
      <div class="card-header">
        Post Creator Information
      </div>
      <div class="card-body">
   
        
        <h5 class="card-title">{{$singlepost['Posted_by'] }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">Email: j_hamel@hotmail.com</h6>
        <p class="card-text">{{$singlepost['Created_at'] }}</p>
      </div>
    </div>

  </div> <!-- End of container -->

  <!-- Bootstrap JS and jQuery (place jQuery before Bootstrap JS) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-FIlIB2vE6O6zS3jzV3YRVpWy4Fqzs/FApbzX5SqQhavfwbJ51a1a4BCFfY0qFVk/" crossorigin="anonymous"></script>
</body>
</html>
