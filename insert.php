<?php

  $con = mysqli_connect('etdq12exrvdjisg6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'v5bpftsb6jsk1p3b', 'luwcm5lyt3wx22xf')

  if(!$con)
  {
    echo 'Not Connected to Server';
  }

  if(!mysqli_select_db($con, 'tutorial'))
  {
    echo 'Database Not Selected';
  }

  $Name = $_POST['username'];
  $Email = $_POST['email'];

  $sql = "INSERT INTO person (Name,Email) VALUES ('$Name', '$Email')";

  if (!mysqli_query($con, $sql))
  {
    echo 'Not Inserted';
  }
  else
  {
    echo "Inserted";
  }

  header("refresh:2; url=index.html");
?>
