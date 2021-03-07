<?php
include '/Projet_back-end/Projet_BE/config/template/head.php';
require '../config/init.php';
?>


<?php 
$categorie = $bdd->query("SELECT * FROM product WHERE categorie = 1");
while ($reponse = $categorie->fetch()) {
  $idproduct = $reponse['id_produit'];

?>
<a href="/Projet_back-end/Projet_BE/page/fiche_produit.php?produit=<?= $idproduct?>">
 <img src="<?php echo $reponse['img']?>"; ?>
 </a>
<p> <?php echo $reponse['nom_produit']; ?> </p>
<p><?php echo $reponse['prix']; ?> </p>
<?php } ?>
<?php include '/Projet_back-end/Projet_BE/config/template/footer.php'; ?>