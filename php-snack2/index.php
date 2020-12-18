<?php
  $name   = $_GET ['name'];
  $email  = $_GET ['email'];
  $age    = $_GET ['age'];





if((strpos($email, '.') !== false) && (strpos($email, '@') !== false) && (strlen($name) > 3) && (is_numerin($age)!== false)) {
   echo " riuscito";
} else {

   echo " negato";
}


//&
?>
