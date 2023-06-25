<?php
 $conn = mysqli_connect("localhost", "root", "worldW@r3", "mydatabase");

 if(!$conn){
  die("fail to connect db");
 }

 $result = mysqli_query($conn, "select * from book");
 $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>

 <style>
  .section-center{
   text-align:center;
  }
  .books-container{
   display:grid;
   grid-template-columns: 1fr 1fr;
   gap: 1rem;
  }
  .book{
   border:1px solid black;
   padding:1rem;
  }

 </style>
</head>
<body>
 <section class="section-center">
  <h3>Books</h3>
  <div class="books-container">

   <?php foreach($books as $book){ ?>
    <div class="book">
     <h3><?=$book["book_name"]?></h3>
     <h4>price: <?=$book["book_price"]?></h4>
     <h4>author: <?=$book["book_author"]?></h4>
     <h5>description</h5>
     <p><?=$book["book_desc"]?></p>

     <button>Add to cart</button>
    </div>
    <?php } ?>
   
  </div>
 </section>

</body>
</html>