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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Bienvenido</a></li>
      <li><a href="TablaPendientes.php">Tabla pendientes</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="modalLogin.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      <li><a href="index.php?logout='1'"<span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>

     <div class="header">
         <h2>Home page</h2>
     </div>

     <div class="content">
        <?php if (isset($_SESSION['success'])): ?>
            <div class= "error success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <?php if (isset($_SESSION["username"])): ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
        <?php endif ?>
     </div>    
     
</body>
</html>
