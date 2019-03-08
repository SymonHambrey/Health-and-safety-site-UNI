<?php

session_start();

if(!isset($_SESSION['admin']) || empty($_SESSION['admin'])){
  echo '<script>location.replace("admin.php")</script>';
}

include '../php/connect.php';

$id=($_POST['name']);
$table=($_POST['table']);
$user=($_SESSION['admin']);

if($id!=$user){
  if($table=="login"){
    $stmt=$pdo->prepare("DELETE FROM login_data WHERE ID=:id;");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo "<script>alert('ID $id deleted')</script>";
  }
  else{
    $stmt=$pdo->prepare("DELETE FROM admin_data WHERE ID=:id;");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo "<script>alert('ID $id deleted')</script>";
  }
}
else{
  echo "<script>alert('Cannot delete yourself')</script>";
}
echo "<script>location.replace('admin_page.php')</script>";
?>
