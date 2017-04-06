<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "CityTaxi";

  $name=$_POST["userName"];
  $email=$_POST["userEmail"];
  $msg=$_POST["userMsg"];
  $phn=$_POST["userPhone"];
 

  $sql =  "INSERT INTO contact VALUES ('".$name."','".$email."','".$phn."','".$msg."')";

  $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

  if (mysqli_query($conn, $sql)) {
      header("location:msg.html");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>