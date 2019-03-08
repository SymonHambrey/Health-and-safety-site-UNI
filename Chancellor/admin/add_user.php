<?php

  session_start();

  require '../php/connect.php';

  $user_ID=($_POST['new_user']);
  $user_POS=($_POST['stad']);

  if($user_POS=="staff"){
    if(!empty($user_ID)){
      $stmt = $pdo->prepare("INSERT INTO login_data(ID, PASS) VALUES(:usr, 'password');");
      $stmt->bindParam(':usr', $user_ID);
      $stmt->execute();
      echo "<script>alert('User $user_ID added');</script>";
      echo "<script>location.replace('admin_page.php?test')</script>";
    }
  }
  else{
    if(!empty($user_ID)){
      $stmt = $pdo->prepare("INSERT INTO admin_data(ID, PASS) VALUES(:usr, 'password');");
      $stmt->bindParam(':usr', $user_ID);
      $stmt->execute();
      echo "<script>alert('User $user_ID added');</script>";
      echo "<script>location.replace('admin_page.php?test')</script>";
    }
  }


?>
