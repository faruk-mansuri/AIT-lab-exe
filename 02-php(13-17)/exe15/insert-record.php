<?php
 $conn = mysqli_connect('localhost', 'root', 'worldW@r3', 'mydatabase');
 if(!$conn){
  die("fail to connect");
 }

 if(isset($_GET["submit"])){
  $id = (int)$_GET["id"];
  $name = $_GET["name"];
  $address = $_GET["address"];
  $salary = $_GET["salary"];
  $dept = $_GET["dept"];

  if(mysqli_query($conn, "insert into employees values($id, '$name', '$address', $salary, $dept)")){
   header("Location: index.php");
  }else{
   echo "error";
  }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h3>create new emp</h3>
 <form>
 <div>
  <label>Id</label>
  <input type="number" name="id">
 </div>
 <div>
  <label>name</label>
  <input type="text" name="name">
 </div>
 <div>
  <label>address</label>
  <input type="text" name="address">
 </div>
 <div>
  <label>salary</label>
  <input type="number" name="salary">
 </div>
 <div>
  <label>department number</label>
  <input type="number" name="dept">
 </div>

 <button name="submit">submit</button>

 </form>
 
</body>
</html>