<?php
 $conn = mysqli_connect("localhost", "root", "worldW@r3", "mydatabase");
 if(!$conn){
  die("failed to connect");
 }

 $code = "";
 for($i = 0; $i < 4; $i++){
  $code .= random_int(0,9);
 }


 $userID = $_GET["userID"];
 $productName = $_GET["name"];
 $complain = $_GET["complain"];

 $result = mysqli_query($conn, "insert into complain values ($code, $userID, '$productName', '$complain')");

 if($result){
  echo "Success!! complain successfully registered <br>";
  echo "your complain code is " . $code;
 }else{
  echo "something went wrong";
 }

?>