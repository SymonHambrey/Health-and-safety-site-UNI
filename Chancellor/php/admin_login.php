<?php

  session_start();

  $needed = "1";

  require "connect.php";

  $login_ID=($_POST['user']);
  $login_PASS=($_POST['pass']);

  if(!empty($login_ID)){
    $stmt = $pdo->prepare('SELECT * FROM admin_data;');
    $stmt->execute();
    while ($row = $stmt->fetch()){
      if($login_ID==$row['ID'] && $login_PASS===$row['PASS']){
        if($row['PASS']=="password"){
          $_SESSION['newpass']=$needed;
        }
        $_SESSION['admin']=$row['ID'];
        echo "<script>location.replace('../admin/admin_page.php')</script>";
      }
      echo '<script>alert("Access Denied")</script>';
      echo '<script>location.replace("../admin/admin.php")</script>';
    }
  }

?>
