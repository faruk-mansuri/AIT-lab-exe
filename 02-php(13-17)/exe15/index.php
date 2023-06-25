<?php
 $conn = mysqli_connect('localhost', 'root', 'worldW@r3', 'mydatabase');

 if(!$conn){
  die("failed to connect database");
 }

 $result = mysqli_query($conn, "select * from employees");
 $employees = mysqli_fetch_all($result, MYSQLI_ASSOC);
 

 // if(isset($_POST["submit"])){
 // }
 if(isset($_GET["delete"])){
  $id = $_GET["id"];
  if(mysqli_query($conn, "delete from employees where id=$id")){
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

 <style>
  .emp{
   display:flex;
   justify-content:space-between;
   align-items:center;
  }
  .emp h4{
   text-align:center;
   justify-self: flex-start;
  }
  .btn{
   display:block;
  }
  a{
   text-decoration:none;
  }
 </style>
</head>
<body>

 <?php foreach($employees as $emp) { ?>
  <div class="emp">
   <h4><?=$emp["id"]?></h4>
   <h4><?=$emp["name"]?></h4>
   <a href="./view-record.php?id=<?=$emp["id"]?>">view</a>


   <form>
    <input hidden=true name="id" value=<?=$emp["id"]?>>
    <button class='btn' name="delete">
     delete
    </button>
   </form>
  </div>

  <?php }?>

  <a href="./insert-record.php?>">insert record</a> <br>
  <a href="./department-wise-record.php?>">department wise record</a>
 
</body>
</html>
