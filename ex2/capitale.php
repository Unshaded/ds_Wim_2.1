<?php
$connexion =new PDO(
"mysql:host=dwarves.iut-fbleau.fr;dbname=ozcan;charset=utf8",
"ozcan",
"ozcan1"
);
extract($_POST);
if(isset($nom)){
  $select = $connexion->query("Select * From capitale where nom='$nom'");
  foreach ($select as $res){
    echo"<tr>".$res['nom']."</tr><br>";
    echo"<img src=".$res['image']."><br>";
    $proche = $connexion->query("Select id,distance From distance where id1='$id' Order by distance asc line 1");
    echo"<tr>".$proche['distance']."</tr>";
  }
}
?>