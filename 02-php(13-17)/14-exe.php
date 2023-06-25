<?php 
 // using loop
 function fibonacci_using_loop($n){
  $a = 0;
  $b = 1;
  echo $a . "  ";
  echo $b . "  ";
  for($i = 2; $i<$n; $i++){
   $c= $a+$b;
   echo $c . "  ";
   $a = $b;
   $b = $c;
  }
 }
 echo "fibonacci series using loop <br>";
 fibonacci_using_loop(7);

 // using recursion
 function fibonacci_using_recursion($n, $a=0, $b=1){
  if($n==0){
   return;
  }
  echo $a . "  ";
  fibonacci_using_recursion($n-1, $b, $a+$b);
 }

 echo "<br> <br>";
 echo "fibonacci series using recursion <br>";
 echo fibonacci_using_recursion(7);
?>