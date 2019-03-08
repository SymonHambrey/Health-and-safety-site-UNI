<?php

  $admin_email="symonhambrey@gmail.com";
  $email=$_POST['email'];
  $subject="Query ".date("h:i d-m-y");
  $comment=$_POST['query'];
  $previous=$_POST['previous'];

  mail($admin_email, "$subject", $comment, "From:" . $email);

  header("refresh:0; url=$previous");
?>
