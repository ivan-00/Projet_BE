<head>

<?php include '../config/template/head.php';?>

</head>

<?php

include '../config/template/nav.php';

$bdd = new PDO("mysql:host=localhost;dbname=projetBackend;charset=utf8","root","root");

$request = $bdd->query("SELECT * FROM product WHERE categorie = 1");

echo("Requête préparée");
$produits = $request->fetchAll();

foreach ($produits as $produit) {
  echo "<div class='tuile''>";
    echo '<a href="">';
    echo $produit["nom_produit"];
    echo '<img src='.$produit["img"]." alt='Image CBD' /> <br />";
    echo "<p class='prix'> A partir de : " .$produit['prix']." €</p>";
    echo '</a>';
  echo "</div>";
}
?>  

<?php
include '../config/template/footer.php';







