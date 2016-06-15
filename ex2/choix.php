<?php 
//include(connexion.php);
$connexion =new PDO(
"mysql:host=dwarves.iut-fbleau.fr;dbname=ozcan;charset=utf8",
"ozcan",
"ozcan1"
);
?>

<html>
  <head>
    <meta charset="latin">
    <title>Controle</title>
  </head>
  <body>
    <form method="POST" action="capitale.php">
      <select name="nom" required>
        <?php $select = $connexion->query("Select nom From capitale");
        foreach ($select as $res) { ?>
        <option><?php echo $res['nom'];?></option>
        <?php } ?>
      </select><br>
      <input type="submit" value="envoyer">
    </form>
  </body>
</html>