<?php
  $id;
  $serverName = "localhost";
  $userName = "root";
  $password = "worldW@r3";
  $database = "mydatabase";

  $conn = mysqli_connect($serverName, $userName, $password, $database);

  if(!$conn){
    die("Connection error: " . mysqli_connect_error());
  }


  if(isset($_GET)){
   $id = $_GET["id"];
  }

   if(isset($_POST["submit"])){
    $name = $_POST["name"];
    echo $id;

    $query = "update user set name='$name' where userId=$id";

    if(mysqli_query($conn, $query)){
     header("Location: index.php");
    }else{
     die("Connection error: " . mysqli_connect_error());
    }
  }

  

  // close connection
  mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

 <!-- Compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
    />


  <link rel="stylesheet" href="./index.css">
 <title>Document</title>
</head>
<body>

  <!-- form -->
  <section class="container">
    <h3>User Details</h3>
    <form class="user-form form" action="" method="post" >
     <h2 class="userId">userID  <?=$id?> </h2>
      <div class="search">
        <input class="search_input" type="text" name="name"  placeholder="e.g. john">
        <button type="submit" name="submit" class="submit_btn btn">Submit</button>
      </div>

    </form>
  </section>

 
 
</body>
</html>
