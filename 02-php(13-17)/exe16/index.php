<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <h3>complaint against electronic product</h3>

 <form method="get" action="server.php">
  <div>
   <label>UserID</label>
   <input type="number" name="userID">
  </div>
  <div>
   <label>Product Name</label>
   <input type="text" name="name">
  </div>
  <div>
   <label>Complain</label>
   <input type="text" name="complain">
  </div>

  <button name="submit">Submit</button>
 </form>
</body>
</html>