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
    <h1>My Form Page</h1>
    <p>Resize this responsive page to see the effect!</p> 
  </div>
  
  <div class="container">
    <h2>Registration</h2>

    <form action="{{ url('/') }}/register" method="POST">
      @csrf  

      <div class="container">
        <x-input type="text" name="name" label="Enter your Name"/>
        <x-input type="email" name="email" label="Enter your Email"/>
        <x-input type="password" name="password" label="Enter your Password"/>
        <x-input type="date" name="dob" label="Enter your Date of Birth"/>
        <x-input type="text" name="gender" label="Enter your Gender"/>
        <x-input type="date" name="check_in" label="Enter your Check-in Date"/>
        <x-input type="date" name="check_out" label="Enter your Check-out Date"/>
        <x-input type="text" name="department" label="Enter your Department"/>
        <x-input type="number" name="phone_no" label="Enter your Phone Number"/>
        <x-input type="text" name="address" label="Enter your Address"/>
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
