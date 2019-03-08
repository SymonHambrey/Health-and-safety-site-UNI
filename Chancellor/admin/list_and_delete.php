<?php

session_start();

if(!isset($_SESSION['admin']) || empty($_SESSION['admin'])){
  echo '<script>location.replace("admin.php")</script>';
}

include '../php/connect.php';

$stmt_admin=$pdo->prepare("SELECT ID FROM admin_data");
$stmt_login=$pdo->prepare("SELECT ID FROM login_data");

$stmt_admin->execute();
$stmt_login->execute();

?>

<h4 class="text-muted text-center">Authorised Staff</h4>
<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-4 text-center">
    <p><strong>User ID</strong></p>
  </div>
  <div class="col-sm-4 text-center">
    <p><strong>Delete?</strong></p>
  </div>
  <div class="col-sm-2"></div>
</div>
<?php
while ($row = $stmt_login->fetch()){
  echo '<div class="row">';
  echo '<div class="col-sm-2"></div>';
  echo '<div class="col-sm-4 label-text_admin text-center modal_bottom_border"><p>'.$row['ID'].'</p></div>';
  echo '<div class="col-sm-4 text-center modal_bottom_border">';
  ?>
  <form action="delete_confirm.php?user=<?php echo $row['ID'];?>" method="post">
      <input type="hidden" name="name" value="<?php echo $row['ID']; ?>">
      <input type="hidden" name="table" value="login"/>
      <input class="delete-blue-buttons btn btn-primary" type="submit" name="submit" value="Delete">
  </form>
  <?php
  echo '</div></div><div class="col-sm-2"></div>';
}

?>
<br>
<h4 class="text-muted text-center">Authorised Administrators</h4>
<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-4 text-center">
    <p><strong>Admin ID</strong></p>
  </div>
  <div class="col-sm-4 text-center">
    <p><strong>Delete?</strong></p>
  </div>
  <div class="col-sm-2"></div>
</div>
<?php
while ($row = $stmt_admin->fetch()){
  echo '<div class="row">';
  echo '<div class="col-sm-2"></div>';
  echo '<div class="col-sm-4 label-text_admin text-center modal_bottom_border"><p>'.$row['ID'].'</p></div>';
  echo '<div class="col-sm-4 text-center modal_bottom_border">';
  ?>
  <form action="delete_confirm.php?user=<?php echo $row['ID'];?>" method="post">
      <input type="hidden" name="name" value="<?php echo $row['ID']; ?>">
      <input type="hidden" name="table" value="admin"/>
      <input class="delete-blue-buttons btn btn-primary" type="submit" name="submit" value="Delete">
  </form>
  <?php
  echo '</div></div><div class="col-sm-2"></div>';
}

?>
