<?php

include 'setpass.php';

?>

<!--
Copyright 2018, Chancellor Systems, All rights reserved

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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="../js/main.js"></script>
</head>

<body>

  <div class="page">

  <header id="header" class="fixed-header">
      <img class="logo" src="../images/logo.png"/>
      <h1 class="head_text">New password required</h1>
  </header>

  <form action="" method="post">
    <div class="row">
      <div class="col-sm-4 text-right">
        <label class="label-text" for="newpass">Enter new password&nbsp;</label>
      </div>
      <div class="col-sm-6">
        <input id="newpassword" type="password" name="newpass"/>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4 text-right">
        <label class="label-text" for="confirm">Confirm new password&nbsp;</label>
      </div>
      <div class="col-sm-6">
        <input id="confpassword" type="password" name="confirm"/>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-4 text-right" >
        <button class="blue-buttons btn btn-primary" type="button" id="cancel">Cancel</button>
      </div>
      <div class="col-sm-6">
        <button class="blue-buttons btn btn-primary" type="submit" name="submit" id="submit_new">Submit</button>
      </div>
    </div>
  </form>
  <br>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-8">
      <?php echo $error ?>
    </div>
  </div>


    <footer id="foot_bar" class="fixed-footer">
        <p id="foot">&copy; 2018 Chancellor Systems</p>
     </footer>

    </div>

</body>

</html>
