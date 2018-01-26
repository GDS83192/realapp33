<?php

  $con = mysqli_connect('mysql://sm1ys110p372t6my:xn32w9knjsvqrjxc@gmgcjwawatv599gq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/aobcpskiubl03ixi');

  if(!$con)
  (
    echo 'Not Connected to Server';
  )

  if(!mysqli_select_db($con, 'aobcpskiubl03ixi'))
  (
    echo 'Database NOt Selected';
  )

  $Name = $_POST['username'];
  $Email = $_POST['email'];

  $sql = "INSERT INTO person (Name,Email) VALUES ('$Name', '$Email')";

  if(!mysqli_query($con,$sql))
  (
    echo 'Not Inserted';
  )
  else
  (
    echo 'Inserted';
  )

    header("refresh:2; url=index.html");
?>
