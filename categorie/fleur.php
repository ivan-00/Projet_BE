<head>
<?php include '/config\init.php'; ?>
<?php include '../config/template/head.php';?>

</head>

<?php

include '../config/template/nav.php';

$request = $bdd->prepare("SELECT * FROM product WHERE categorie = 1");
$request->execute();
echo("Requête préparée");
$produits = $request->fetchAll();
  
print_r($produits);
?>

<?php
include '../config/template/footer.php';
echo('Fin de Fleur');






