<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "CityTaxi";

  $name=$_POST["name"];
  $user=$_POST["user"];
  $pass=$_POST["password"];
  $phn=$_POST["ph"];
 

  $sql =  "INSERT INTO logsin VALUES ('".$user."','".$pass."','".$name."','".$phn."')";

  $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

  if (mysqli_query($conn, $sql)) {
      $_SESSION["username"]=$user;
      header("location:index.html");
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

?>