<?php include('server.php'); ?> 
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

      <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="modalLogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="index.php?logout='1'"<span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>


      <div class="header"> 
          <h2>Login</h2> 
      </div> 
 
 
      <form method="post" action="login.php"> 
           <!-- display validation errors here --> 
           <?php include('errors.php'); ?> 
            
           <div class="input-group"> 
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> 
              <input id="username" type="text" class="form-control" name="username" placeholder="Username"> 
           </div> 
 
 
           <div class="input-group"> 
             <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> 
             <input id="password" type="password" class="form-control" name="password_1" placeholder="Password"> 
           </div> 
 
 
            
           <div class="input-group"> 
                <button type="submit" name="login" class="btn">Login</button> 
           </div> 
           <p> 
               Not yet a member? <a href="register.php">Sign up</a> 
           </p> 
      </form> 
</body> 
</html>
