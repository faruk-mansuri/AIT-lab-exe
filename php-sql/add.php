<?php
  $serverName = "localhost";
  $userName = "root";
  $password = "worldW@r3";
  $database = "mydatabase";

  $conn = mysqli_connect($serverName, $userName, $password, $database);

  if(!$conn){
    die("Connection error: " . mysqli_connect_error());
  }

  // query
  $query = "select * from user";
  $result = mysqli_query($conn, $query);
  $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // free result from memory
  // mysqli_free_result($result);



  if(isset($_POST["add"])){
    $id = $_POST["userId"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $zip = $_POST["zip"];
    $password = $_POST["password"];

    $query = "insert into user values($id, '$name', $zip, '$email','$password');";

    if(mysqli_query($conn, $query)){
      header("Location: index.php");
    }else{
      die("error: " . mysqli_error($conn));
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

  <section class="section">
   <div class="section-center form-section">
    <form action="" method="post" class="form">
     <h3>Add User</h3>

     <!-- id -->
     <div class="form-row">
      <label for="userId" class="form-label">User ID</label>
      <input id="userId" class="form-input" name="userId" type="number" placeholder="enter user id">

     </div>

     <!-- name -->
     <div class="form-row">
      <label for="name" class="form-label">Name</label>
      <input id="name" class="form-input" name="name" type="text" placeholder="enter your name">
     </div>

     <!-- email -->
     <div class="form-row">
      <label for="email" class="form-label">email</label>
      <input id="email" class="form-input" name="email" type="email" placeholder="enter your email">
     </div>

     <!-- sip -->
     <div class="form-row">
      <label for="zip" class="form-label">zip</label>
      <input id="zip" class="form-input" name="zip" type="number" placeholder="enter your zip code">
     </div>

     <!-- password -->
     <div class="form-row">
      <label for="password" class="form-label">password</label>
      <input id="password" class="form-input" name="password" type="password" placeholder="enter your password">
     </div>

     <!-- submit btn -->
     <button type="submit" name="add" class="btn btn-block">submit</button>
     

    </form>
   </div>
  </section>
</body>
</html>