<?php 
  $small_alpha = "abcdefghijklmnopqrstuvwxyz";
  $capital_alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $numbers = "0123456789";
  $text = $small_alpha.$capital_alpha.$numbers;


  function generatePassword(){
    global $text;
    $password = substr(str_shuffle($text), 0, 10 );
    echo "password is " . $password . " <br>";

    $pattern = '/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9]{10}/';
    if (preg_match($pattern, $password)) {
        return $password;
    } 
    return generatePassword();
  }

  echo generatePassword();
?> 

