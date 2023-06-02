<?php
  $serverName = "localhost";
  $userName = "root";
  $password = "worldW@r3";
  $database = "mydatabase";

  // Create connection
  $conn = mysqli_connect($serverName, $userName, $password, $database);

  if(!$conn){
   echo "123";
   echo "Connection error: ", mysqli_connect_error();
  }

  // query
  $query = "select * from user";

  // getting result
  $result = mysqli_query($conn, $query);

  // converting records to an associative array
  $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // free result from memory
  mysqli_free_result($result);

  // close connection
  mysqli_close($conn);


  print_r($users);



?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="./index.css">
 <title>Document</title>
</head>
<body>

  <!-- navbar -->
  <nav class="nav">
    <div class="navbar">
      <div class="header">
        <h2 class="logo">logo</h2>
        <ul class="nav-links">
          <li><a href="#">JavaScript</a></li>
          <li><a href="#">Components</a></li>
          <li><a href="#">JavaScript</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- form -->
  
  <!-- form -->
  <section class="container">
    <h3>Students Details</h3>

    <form class="form" action="" method="post" >
      <div>
        <label for="email">your email</label>
        <input type="text" name="email" id="email" value="<?=$email ?>">
        <p class="error"><?=$errors["email"]?></p>
      </div>
      <div>
        <label for="title">Pizza title</label>
        <input type="text" name="title" id="title" value="<?=$title ?>">
        <p class="error"><?=$errors["title"]?></p>
      </div>
      <div>
        <label for="ingredient">your ingredient</label>
        <input type="text" name="ingredient" id="ingredient" value="<?=$ingredient?>">
        <p class="error"><?=$errors["ingredient"]?></p>
      </div>
      
      <button type="submit" name="submit" class="btn">Submit</button>
    </form>
  </section>
 
 
 
</body>
</html>


