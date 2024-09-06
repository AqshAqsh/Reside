<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

  <div class="jumbotron text-center">
    <h1>My FOrm page</h1>
    <p>Resize this responsive page to see the effect!</p> 
  </div>
  

  <div class="container">
    <h2>Registration</h2>

    <form class="" action="{{url('/')}}/register" method="post">
      @csrf  
      <div class="container">
        <x-input type="text" name="name" label="Enter your name"/>
        <x-input type="email" name="email" label="Enter your email"/>
        <x-input type="password" name="password" label="Enter your password"/>
        <x-input type="password" name="password_confirmation" label="Confirm your password"/>

      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" name="remember"> Remember me
        </label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


</body>
</html>
