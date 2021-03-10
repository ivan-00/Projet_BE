<?php require 'config/init.php';
?>

<?php
$id= $_GET['produit'];
if (filter_var($id,FILTER_VALIDATE_INT) == false) {
  echo 'erreur';
}
$produit = $bdd->query("SELECT * FROM product WHERE id_produit = '$id'");
if ($reponse = $produit->fetch()) {?>
<h1> <?php echo $reponse['nom_produit'];  ?></h1>
  <?php
  }
  else {
    echo 'aucun produit trouvé';
  }
  ?>
