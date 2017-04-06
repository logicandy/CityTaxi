<?php


  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "CityTaxi";


  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

    $user=$_POST["user"];
    $pass=$_POST["password"];

     $sql = "SELECT * FROM logsin WHERE Uname = '$user' and Password = '$pass'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count=mysqli_num_rows($result);
 
       if($count == 1) {
        echo "s";
         //echo "success";  
          header("location: index.html");
      }else {
         echo "fail";
           echo '<script type="text/javascript">alert("Incorrect Username or Password")</script>';
      }
   

?>