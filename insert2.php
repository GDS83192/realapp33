<?php
  $con = mysqli_connect('gmgcjwawatv599gq.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'sm1ys110p372t6my', 'sxkp0mrrmptaqpb0');
  if(!$con)
  {
    echo 'Not Connected to Server';
  }
  if(!mysqli_select_db($con, 'aobcpskiubl03ixi'))
  {
    echo 'Database NOt Selected';
  }
  $PhoneNumber = $_POST['phone_number'];
  $CreditCardNum = $_POST['credit'];
  $sql = "INSERT INTO account_info (PhoneNumber,CreditCardNum) VALUES ('$PhoneNumber', '$CreditCardNum')";
  if(!mysqli_query($con,$sql))
  {
    echo 'Not Inserted';
  }
  else
  {
    echo 'Inserted';
  }
    header("refresh:2; url=index.html");
?>
