<?php
extract($_POST);
if($langue){
  if($langue=='anglais')
    echo'Hello';
  if($langue=='francais')
    echo 'Bonjour';
  if($langue=='espagnol')
    echo 'Hola';
}
?>