<?php
session_start();
require '../config/init.php';
?>
<head>
<?php include'../config/template/head.php';?>

</head>
<?php include '../config/template/nav.php';?>
<section>
  <article>
    <?php
      $id= $_GET['produit'];
        if (filter_var($id,FILTER_VALIDATE_INT) == false) {
          echo 'erreur';
        }
        $produit = $bdd->query("SELECT * FROM product WHERE id_produit = '$id' ");
        if ($reponse = $produit->fetch()) {
    ?>
    <h1><?php echo $reponse['nom_produit'];?></h1>
      <div class="container">
      <img src=" <?php echo $reponse["img"];?>" alt="Image de CBD" class="img_fiche_produit">
      <h2 class="nom_produit"><?php echo $reponse ['nom_produit'];?></h2>
      <p class="text_description"><?php echo $reponse ['description']?></p>
      <p class="text_condition"><?php echo $reponse ['condition_produit']?> </p>
        <div class=''>
          <p class='text_prix_a'>A partir de</p>
          <p class='text_prix'><?php echo $reponse ['prix']?>€</p>
        </div>
      </div>
    </article>
  <article>
    <div class="banner banner_accueil">
      <div class="banner_text">
        <img src="../asset/style/img/logo_index/home.svg" alt="livraison express">
        <h1>Livraison express</h1>
        <p>La livraison en moins de 1h30 à Paris et moins de 2h30 en « Banlieues Proches » . Expédition sous 1 jour ouvré en France métropolitaine.</p>
      </div>
      <div class="banner_text">
        <img src="../asset/style/img/logo_index/pay-per-click.svg" alt="paiement securisé">
        <h1>Paiement securisé</h1>
        <p>Nous acceptons différents moyens de paiement tous sécurisés. CB, Mastercard, Visa, Electron</p>
      </div>
      <div class="banner_text">
        <img src="../asset/style/img/logo_index/remove-from-cart.svg" alt="naturel et bio">
        <h1>Naturel et Bio</h1>
        <p>Nos produits d’origine naturelle et principalement Bio.</p>
      </div>
      <div class="banner_text">
        <img src="../asset/style/img/logo_index/security.svg" alt="produit 100% leagaux">
        <h1>Produit 100% Légaux</h1>
        <p>Nos produits contiennent un taux de THC inférieur à 0,2% et respectent la législation Européenne en vigueur.</p>
      </div>
    </div>
  </article>
  </section>
<?php
    }
    else {
      echo 'aucun produit trouvé';
    }
    include '../config/template/footer.php';
?>
