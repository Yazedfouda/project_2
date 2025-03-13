<!DOCTYPE html>
<html lang="en">
<head>
<link href="css/log.css" rel="stylesheet">
    <link href="css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<div class="continer">
    <form method="post" action="data/data.php
    ">
        <h2>Admin</h2>
  <!-- username input -->
  <div data-mdb-input-init class="form-outline mb-3">
    <label class="form-label" for="username">Username:</label>
    <input type="text" id="username" name="username" class="form-control" placeholder="Username"/>
  </div>

  <!-- email input -->
  <div data-mdb-input-init class="form-outline mb-3">
    <label class="form-label" for="email">Email:</label>
    <input type="email" id="email" name="email" class="form-control" placeholder="Email"/>
  </div>
  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-3">
    <label class="form-label" for="Password">Password:</label>
    <input type="password" id="Password" name="password" class="form-control" placeholder="Password"/>
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-3">
    <div class="col d-flex justify-content-center">
      <!-- Checkbox -->
      <div class="form-check">
        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
        <label class="form-check-label" for="form2Example31"> Remember me </label>
      </div>
    </div>

    <div class="col">
      <!-- Simple link -->
      <a href="#!">Forgot password?</a>
    </div>
  </div>

  <!-- Submit button -->
  <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign in</button>

  <!-- Register buttons -->
  <div class="text-center">
    <p>a member? <a href="login.php">login</a></p>
    <p>or sign up with:</p>
    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fab fa-facebook-f"></i>
    </button>

    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fab fa-google"></i>
    </button>

    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fab fa-twitter"></i>
    </button>

    <button  type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-link btn-floating mx-1">
      <i class="fab fa-github"></i>
    </button>
  </div>
</form>
    </div>
</body>
</html>