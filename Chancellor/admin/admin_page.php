<?php

session_start();

if(!isset($_SESSION['admin']) || empty($_SESSION['admin'])){
  echo '<script>location.replace("admin.php")</script>';
}

if(isset($_SESSION['newpass'])){
  echo '<script>location.replace("newpass.php")</script>';
}

?>

<!--
Copyright 2018, Chancellor Systems, All rights reserved
-->

<!--
Image Credits
Yellow Triangle: Clker-Free-Vector-Images, https://pixabay.com/en/warning-sign-30915/

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
        <div class="row">
          <div class="col-md-6">
            <img class="logo_admin" id="logo" src="../images/logo.png"/>
            <h1 class="text-right">Admin page</h1>
          </div>
          <div class="col-md-3 text-right">
            <button type="button" class="blue-buttons btn btn-primary" data-toggle="modal" data-target=".add-user">
              Add User
            </button>
          </div>
          <div class="col-md-3">
            <button type="button" class="blue-buttons btn btn-primary" data-toggle="modal" data-target=".del-user">
              Delete User
            </button>
          </div>
        </div>
        <br>
      </header>

      <div id="modal_adduser" class="modal fade add-user" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
          <div id="modal_adduser_content" class="modal-content">
            <img class="modal_not_bs_logo" src="../images/logo_no_text.png" alt="logo">
            <span class="close_modal" title="Close" data-dismiss="modal">&times;</span>
            <form id="adduser_form" method="post" action="add_user.php">
              <div class="row">
                <div class="col-sm-6  text-right">
                  <label for="new_user"><strong>Enter New User&nbsp;</strong></label>
                </div>
                <div class="col-sm-6">
                  <input type="text" placeholder="Uni login" name="new_user" required/>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 text-right">
                  <label for="position"><strong>Staff or Admin?&nbsp;</strong></label>
                </div>
                <div class="col-sm-6">
                  <select class="select-text" name="stad">
                    <option value="staff">Staff</option>
                    <option value="admin">Admin</option>
                  </select>
                </div>
              </div>
              <br>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6 text-center">
                    <button class="blue-buttons btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
                  </div>
                  <div class="col-md-6 text-center">
                    <button class="blue-buttons btn btn-primary" id="add_submit" type="submit">Submit</button>
                  </div>
                </div>
              </div>
            </form>
            <br>
          </div>
        </div>
      </div>

      <div id="modal_deluser" class="modal fade del-user" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
          <div id="modal_deluser_content" class="modal-content">
            <img class="modal_logo" src="../images/logo_no_text_small.png" alt="logo">
            <span class="close_modal" title="Close" data-dismiss="modal">&times;</span>
            <br>
            <div><?php include 'list_and_delete.php'; ?></div>
          </div>
        </div>
      </div>



      <footer class="fixed-footer">
        <p id="formfoot">&copy; 2018 Chancellor Systems</p>
      </footer>

    </div>

  </body>

</html>
