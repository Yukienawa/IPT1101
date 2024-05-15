<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa; /* Light gray background */
      font-family: Arial, sans-serif; /* Use a common sans-serif font */
    }
    .container {
      margin-top: 50px;
    }
    .border {
      border: 1px solid #ced4da; /* Light gray border */
      background-color: #fff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    }
    .btn-primary {
      background-color: #007bff !important; /* Bootstrap blue */
      border-color: #007bff !important;
      border-radius: 5px;
    }
    .btn-primary:hover {
      background-color: #0056b3 !important; /* Darker blue on hover */
      border-color: #0056b3 !important;
    }
    .text-danger {
      color: #dc3545; /* Bootstrap red */
    }
    h2 {
      color: #333; /* Dark gray */
    }
    label {
      color: #333; /* Dark gray */
    }
    input.form-control {
      border-color: #ced4da; /* Light gray border for inputs */
      border-radius: 5px;
    }
    input.form-control:focus {
      border-color: #007bff; /* Blue border on focus */
      box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }
    a {
      color: #007bff; /* Bootstrap blue */
    }
    a:hover {
      color: #0056b3; /* Darker blue on hover */
      text-decoration: none;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <form action="index.php" method="post" class="border rounded">
        <h2 class="mb-4 text-center">Login</h2>
        <?php if (isset($_GET['error'])) { ?>
          <p class="text-danger"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        
        <div class="form-group">
          <label for="username">User Name</label>
          <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </form>
      <div class="mt-3 text-center">
        <p class="mb-0">Not signed up yet? <a href="registrationform.php">Sign Up</a></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
