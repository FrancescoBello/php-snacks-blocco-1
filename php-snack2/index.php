<?php
  $name   = $_GET ['name'];
  $email  = $_GET ['email'];
  $age    = $_GET ['age'];

 if (count($name) < 3 ) {
   echo "Accesso n ";
 }else {
   echo "Accesso r ";
 };

 if (is_nan($age)!== false) {
   echo " Accesso Negato ";
 }else {
   echo " Accesso Riuscito ";
 };
 if(strpos($email, '.') !== false) {
    if(strpos($email, '@') !== false) {
        echo " accesso riuscito";
    } else {
        echo " accesso negato";
    }
} else {
    echo " accesso negato";
}

//&
?>
