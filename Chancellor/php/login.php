<?php

  session_start();

  $needed="1";

  require "connect.php";

  $login_ID=($_POST['user']);
  $login_PASS=($_POST['pass']);
  $passthrough=($_POST['page']);

  if(!empty($login_ID)){
    $stmt = $pdo->prepare('SELECT * FROM login_data;');
    $stmt->execute();
    while ($row = $stmt->fetch()){
      if($login_ID==$row['ID'] && $login_PASS===$row['PASS']){
        if($row['PASS']=="password"){
          $_SESSION['newpass']=$needed;
        }
        $_SESSION['login']=$login_ID;
        if($passthrough=='con'){
          echo "<script>location.replace('../reports/concernform.php?newpass=`$needed`')</script>";
        }
        elseif($passthrough=='nea'){
          echo "<script>location.replace('../reports/nearmissform.php?newpass=`$needed`')</script>";
        }
        else{
          echo "<script>location.replace('../reports/accidentform.php?newpass=`$needed`')</script>";
        }
      }
    }
    echo '<script>alert("Access Denied")</script>';
    echo '<script>location.replace("../index.html")</script>';
  }

?>
