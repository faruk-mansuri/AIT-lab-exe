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



  if(isset($_POST["delete"])){
    $id = $_POST["user_id"];
    $query = "delete from user where userId=$id";
    if(mysqli_query($conn, $query)){
      header("Location: index.php");
    }else{
      echo "error";
    }
    
  }

  if(isset($_POST["submit"])){
    $name = $_POST["name"];
    $query = "select * from user where name='$name'";
    if($result = mysqli_query($conn, $query)){
      $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
  }

  if(isset($_POST["show_all_records"])){
    $query = "select * from user";
    $result = mysqli_query($conn, $query);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
  }

  if(isset($_POST["edit"])){
    $id = $_POST["user_id"];
    header("Location: update.php?id=" . $_POST["user_id"]);
  }

  if(isset($_POST["add_user"])){
    header("Location: add.php");
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
  <section class="add">
    <form class="add-form" action="" method="post">
      <button class="add-btn btn" type="submit" name="add_user">add user</button>
    </form>
  </section>

  <!-- form -->
  <section class="container">
    
    <h3>User Details</h3>
    <form class="form" action="" method="post" >
      <div class="search">
        <input class="search_input" type="text" name="name"  placeholder="e.g. john">
        <button type="submit" name="submit" class="submit_btn btn">Submit</button>
      </div>
      <button class="search btn show-records" type="show_all_records" name="show_all_records" class="submit_btn btn">show all records</button>

    </form>
  </section>

  <!-- display user -->
  <section class="section section-center">
    <?php if(count($users)==0){ ?>
      <h2 class="alert">Sorry! no record exists</h2>
    <?php }?>
    <?php foreach($users as $user) { ?>
      <div class="user">
        <h3 class="id"><?=$user["userId"]?></h3>
        <h3 class="id"><?=$user["name"]?></h3>
        <form action="" method="post">
          <input type="hidden" name="user_id" value="<?php echo $user["userId"]?>">

          <div class="btn-container">
            <button name="edit" class="edit-btn">
              <i class="fas fa-edit"></i>
            </button>
            <button name="delete" class="delete-btn">
              <i class="fas fa-trash"></i>
            </button>
          </div>
        </form>
      </div>

    <?php } ?>
  </section>
 
</body>
</html>
<!-- <br /><b>Warning</b>:  Undefined variable $email in <b>C:\xampp\htdocs\php\projects\01-mini-project\index.php</b> on line <b>72</b><br /> -->