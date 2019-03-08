<?php

session_start();

if(isset($_POST['submit'])){

  include '../php/connect.php';

  $newpass=($_POST['newpass']);
  $conpass=($_POST['confirm']);
  $error="";
  $id=($_SESSION['admin']);

  if(empty($newpass) || empty($conpass)){
    $error="Cannot be blank";
  }
  elseif($newpass!=$conpass){
    $error="Passwords do not match";
  }
  else{
    $stmt=$pdo->prepare("UPDATE admin_data SET PASS=:pwd WHERE ID=:id;");
    $stmt->bindParam(':pwd', $newpass);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    unset($_SESSION['newpass']);
    header("location: admin_page.php");
  }

}

?>
