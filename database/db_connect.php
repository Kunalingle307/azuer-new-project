<?php
$con=mysqli_connect("onlineblog.mysql.database.azure.com","onlineblog","@Kunal","blog_admin_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 ?>
