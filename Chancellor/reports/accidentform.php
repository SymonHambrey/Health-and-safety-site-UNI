<?php

session_start();

if(!isset($_SESSION['login']) || empty($_SESSION['login'])){
  echo '<script>location.replace("../index.html")</script>';
}

if(isset($_SESSION['newpass'])){
  $_SESSION['page']="accidentform.php";
  echo '<script>location.replace("newpass.php")</script>';
}

?>

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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
  </head>

  <body>

    <div class="page">

      <header id="header" class="dirty-fix fixed-header">
        <img class="logo" id="logo" src="../images/logo.png"/>
        <h1 class="text-center">Accident Reporting</h1>
        <button type="button" class="top_right_button btn btn-primary" data-toggle="modal" data-target=".contact">
          Contact Administrator
        </button>
      </header>

      <div id="modal_contact" class="modal fade contact" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
          <div id="modal_contact_content" class="modal-content">
            <img class="modal_not_bs_logo" src="../images/logo_no_text.png" alt="logo">
            <span class="close_modal" title="Close" data-dismiss="modal">&times;</span>
            <form method="post" action="../php/mail.php">
              <div class="row">
                <div class="col-sm-6  text-right">
                  <label for="new_user"><strong>Enter email address&nbsp;</strong></label>
                </div>
                <div class="col-sm-6">
                  <input type="text" placeholder="joebloggs@gmail.com" name="email" required/>
                </div>
              </div>
              <div class="row">
                <div class="col-md-1"></div><!-- left space -->
                <div class="col-md-6">
                  <label for="query"><strong>Enter query&nbsp;</strong></label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-1"></div><!-- left space -->
                <div class="col-md-10">
                  <textarea type="textarea" class="querybox" placeholder="Type your query...." name="query"></textarea>
                </div>
                <div class="col-md-1"></div><!-- right space -->
                <input type="hidden" value="../reports/accidentform.php" name="previous"></input>
              </div>
              <div class="col-md-12">
                <div class="row">
                  <div class="col-md-6 text-center">
                    <button type="button" data-dismiss="modal">Cancel</button>
                  </div>
                  <div class="col-md-6 text-center">
                    <button id="email_submit" type="submit">Submit</button>
                  </div>
                </div>
              </div>
            </form>
            <div class="col-md-6 text-right">
              <p id="confirmation"></p>
            </div>
            <br>
          </div>
        </div>
      </div>

      <div class="container" id="acc_form">
        <form class="form-group" action="#" method="get">
          <div class="row">
            <div class="col-md-6">
              <label for="acc_date">Date of incident&nbsp;</label>
              <input type="date" name="acc_date"/>
            </div>
          </div>
          <br>
          <h4 class="text-muted">Person Affected</h4>
          <div class="row">
            <div class="col-md-6">
              <label for="acc_name">Person involved in incident&nbsp;</label>
              <input type="text" name="acc_name"/>
            </div>
            <div class="col-md-5">
              <label for="acc_status">Association to the University&nbsp;</label>
              <select name="acc_status">
                <option value="staff">Staff</option>
                <option value="student">Student</option>
                <option value="contracter">Contractor</option>
                <option value="visitor">Visitor</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="acc_houseno">House Number or Name&nbsp;</label>
              <input type="text" name="acc_houseno"/>
            </div>
            <div class="col-md-5">
              <label for="acc_street">Street Name&nbsp;</label>
              <input type="text" name="acc_street"/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="acc_town">Town&nbsp;</label>
              <input type="text" name="acc_town"/>
            </div>
            <div class="col-md-5">
              <label for="acc_postcode">Postcode&nbsp;</label>
              <input type="text" name="acc_postcode"/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="acc_homeno">Home Telephone&nbsp;<i class="material-icons" data-toggle="tooltip" title="This is optional">help</i>&nbsp;</label>
              <input type="number" name="acc_homeno"/>
            </div>
            <div class="col-md-5">
              <label for="acc_mobile">Mobile Telephone&nbsp;<i class="material-icons" data-toggle="tooltip" title="This is optional">help</i>&nbsp;</label>
              <input type="number" name="acc_mobile"/>
            </div>
          </div>
          <br>
          <h4 class="text-muted">Person Reporting</h4>
          <div class="row">
            <div class="col-md-6">
              <label for="rep_name">Person reporting the incident&nbsp;</label>
              <input type="text" name="rep_name"/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="rep_houseno">House Number or Name&nbsp;</label>
              <input type="text" name="rep_houseno"/>
            </div>
            <div class="col-md-5">
              <label for="rep_street">Street Name&nbsp;</label>
              <input type="text" name="rep_street"/>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label for="rep_town">Town&nbsp;</label>
              <input type="text" name="rep_town"/>
            </div>
            <div class="col-md-5">
              <label for="rep_postcode">Postcode&nbsp;</label>
              <input type="text" name="rep_postcode"/>
            </div>
          </div>
          <br>
          <h4 class="text-muted">Incident Details</h4>
          <div class="row">
            <div class="col-md-6">
              <label for="campus">Campus&nbsp;</label>
              <select name="campus">
                <option value="stjohns">St Johns</option>
                <option value="riverside">Riverside</option>
                <option value="city">City</option>
              </select>
            </div>
            <div class="col-md-5">
              <label for="room">Location/Room Number/Name&nbsp;</label>
              <input type="text" name="room"/>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12" id="desc">
              <textarea type="textarea" name="inj_desc" rows="10" cols="80" placeholder="Description of any injury"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12" id="desc">
              <textarea type="textarea" name="cau_desc" rows="10" cols="80" placeholder="Cause (if known)"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12" id="desc">
              <textarea class="desc" type="textarea" name="inc_desc" rows="10" cols="80" placeholder="Description of Incident"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <label for="riddor">Reportable to <strong>RIDDOR</strong></label>
              <input id="checkbox" type="checkbox" name="riddor"/>
            </div>
            <div class="col-md-4">
              <button class="blue-buttons btn btn-primary" type="submit">
                Submit
              </button>
            </div>
            <div class="col-md-4">
              <button class="blue-buttons btn btn-primary" type="button" id="cancel">
                Cancel
              </button>
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
