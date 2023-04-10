<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Filter</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h2>User /users route to get all the users as you said in assments</h2>
      <form  role="form" method="post"  action="{{ route('users.filter') }}">
        @csrf 
        <div class="form-group">
          <label for="name">Name For Filtter:</label>
          <input type="text" class="form-control" required id="name" placeholder="Enter Filter Name">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
</html>
