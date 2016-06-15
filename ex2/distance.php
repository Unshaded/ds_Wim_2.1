<?php
$connexion =new PDO(
"mysql:host=dwarves.iut-fbleau.fr;dbname=ozcan;charset=utf8",
"ozcan",
"ozcan1"
);
extract($_POST);
if(isset($nom)){
  $select = $connexion->query("Select * From capitale where nom='$nom'");
  $position=$select['id'];
  $tab = $connexion->query("Select id,distance From distance where id1='$position'");
  foreach ($select as $res)
     //echo "<tr>"
  
  foreach($tab as $resu){
  }
}
?>