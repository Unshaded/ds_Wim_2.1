<?php
extract($_POST);
if($langue){
  if($langue=='anglais'){
    //setcookie('1', true,); ne marche pas
    //setcookie('2', false);
    //setcookie('3', false);
    echo'Hello';
}
  if($langue=='francais'){
    //setcookie('2', true);
    //setcookie('1', false);
    //setcookie('3', false);
    echo 'Bonjour';
  }
  if($langue=='espagnol'){
    //setcookie('3', true);
    //setcookie('2', false);
    //setcookie('1', false);
    echo 'Hola';
  }
}
?>