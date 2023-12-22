
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<center>
    <h1 class='mt-5'>Login Form</h1>
</center>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
          <h2 class="text-center">Login</h2>
        </div>
        <div class="card-body">
          <form action='index.php' method='POST'>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name='email' placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name='password' placeholder="Enter your password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block" name='submit' value='login'>Login</button>
          </form>
            <p class='mt-3'>
                Don't have an account ? 
                <a href="register.php">Sign Up</a>
            </p>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
