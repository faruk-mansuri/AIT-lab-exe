<?php
 $conn = mysqli_connect('localhost', 'root', 'worldW@r3', 'mydatabase');
 if(!$conn){
  die("fail to connect");
 }

 $id = $_GET["id"];

 $result = mysqli_query($conn, "select * from employees where id=$id");
 $employee = mysqli_fetch_all($result, MYSQLI_ASSOC)[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h2>Employee details</h2>
 <h3>id : <?=$employee["id"]?></h3>
 <h3>name : <?=$employee["name"]?></h3>
 <h3>address : <?=$employee["address"]?></h3>
 <h3>salary : <?=$employee["salary"]?></h3>
 <h3>dept : <?=$employee["deptno"]?></h3>

 <a href="index.php">Back Home</a>
</body>
</html>