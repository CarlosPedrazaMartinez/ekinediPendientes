<?php include('server.php'); 

    // if user is not logged in, they cannot access this page
    if (empty($_SESSION['username'])) {
        header('location: login.php');
    }

?>
<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" 
 href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

     <!-- Latest compiled and minified JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
     </script>
     <Link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <div class="header">
         <h2>Register</h2>
     </div>

     <form method="post" action="register.php">
          <!-- display validation errors here -->
          <?php include('errors.php'); ?>
          <div class="input-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
          </div>
          <div class="input-group">
              <label>Email</label>
              <input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
          </div>
          <div class="input-group">
              <label>Password</label>
              <input type="password" name="password_1" class="form-control">
          </div>
         
          <div class="input-group">
               <button type="submit" name="register" class="btn">Register</button>
          </div>
          <p>
              Already a member? <a href="login.php">Sign in</a>
          </p>
     </form>
</body>
</html>
