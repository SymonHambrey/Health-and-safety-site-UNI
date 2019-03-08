<!--
Copyright 2018, Chancellor Systems, All rights reserved
-->

<!--

All images pertaining to the University are copyright University of Worcester
-->

<!DOCTYPE html>

<html>

  <head>
    <meta charset="utf-8">
    <title>Chancellor Systems</title>
    <link rel= "stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css"/>
    <link rel="stylesheet" href="../css/modal.css"/>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </head>

  <body>

    <div class="page">

      <header id="header" class="dirty-fix fixed-header">
        <img class="logo" id="logo" src="../images/logo.png"/>
        <h1 class="text-center">Admin Login</h1>
      </header>

      <div class="container" id="admin_login_form">
        <form class="form-group" action="../php/admin_login.php" method="post">
          <div class="row">
            <div class="col-md-6">
              <label for="user">Username&nbsp;</label>
              <input type="text" name="user"/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="pass">Password&nbsp;&nbsp;</label>
              <input type="password" name="pass">
            </div>
          </div>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6">
              <input class="blue-buttons btn btn-primary" type="submit" value="Submit">
            </div>
          </div>
        </form>
      </div>

      <footer class="dirty-fix fixed-footer">
        <p id="formfoot">&copy; 2018 Chancellor Systems</p>
      </footer>

    </div>

  </body>

</html>
