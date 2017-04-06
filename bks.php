<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "CityTaxi";

  $name=$_POST["userName"];
  $from=$_POST["from"];
  $to=$_POST["to"];
  $email=$_POST["userEmail"];
  $adult=$_POST["adult"];
  $children=$_POST["children"];
  $phn=$_POST["userPhone"];
  $dt=$_POST["date"];
  $tm=$_POST["time"];
 

  $sql =  "INSERT INTO book VALUES ('".$name."','".$email."','".$phn."','".$from."','".$to."','".$adult."','".$children."','".$dt."','".$tm."')";

  $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

  if (mysqli_query($conn, $sql)) {
      $_SESSION["username"]=$user;
      header("location:thank.html");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>