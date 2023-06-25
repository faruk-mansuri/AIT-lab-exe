<?php
 $conn = mysqli_connect('localhost', 'root', 'worldW@r3', 'mydatabase');
 if(!$conn){
  die("fail to connect");
 }


 $result = mysqli_query($conn, "select count(*) as count, deptno from employees group by deptno");
 $records = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>

 <style>
  div{
   display:flex;
   justify-content:space-between;
  }
 </style>
</head>
<body>
 <div>
  <h3>department number</h3>
  <h3>count</h3>
 </div>
 <?php foreach($records as $dept){?>
  <div>
   <h3><?=$dept["deptno"]?></h3>
   <h3><?=$dept["count"]?></h3>
  </div>
 <?php }?>

  <a href="index.php">Back Home</a>

</body>
</html>