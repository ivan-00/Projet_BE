<?php
session_start();
// $bdd = new PDO("mysql:host=localhost;dbname=projetBackend;charset=utf8","root","root");
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
      <div class="container">
        <img src=" <?php echo $reponse["img"];?>" alt="Image de CBD" class="img_fiche_produit">
          <div class="bloc_info">
            <h1 class="nom_produit"><?php echo $reponse ['nom_produit'];?></h1>
            <p class="text_condition"><?php echo $reponse ['condition_produit']?> </p>
            <p class="titre_description">Information :</p>
            <p class="text_description"> <?php echo $reponse ['description']?></p>
              <div class='bloc_prix'>
                <p class='text_prix_a'>A partir de :</p>
                <p class='text_prix'><span id="text_prix"><?php echo $reponse ['prix']?></span>€</p>
              </div>
              <form class="bloc_quantite" action="POST">
                <input type="button" id="moins" value="-" >
                <input type="text" id="result" value="1" maxlength="2">
                <input type="button" id="plus" value="+" >
                <input type="submit" value="Ajouter au panier">
              </form>
            </div>
      </div>
    </article>
  <article>
    <div class="banner banner_accueil">
      <div class="banner_text">
        <img src="../asset/style/img/logo_index/home.svg" alt="livraison express">
        <h2>Livraison express</h2>
        <p>La livraison en moins de 1h30 à Paris et moins de 2h30 en « Banlieues Proches » . Expédition sous 1 jour ouvré en France métropolitaine.</p>
      </div>
      <div class="banner_text">
        <img src="../asset/style/img/logo_index/pay-per-click.svg" alt="paiement securisé">
        <h2>Paiement securisé</h2>
        <p>Nous acceptons différents moyens de paiement tous sécurisés. CB, Mastercard, Visa, Electron</p>
      </div>
      <div class="banner_text">
        <img src="../asset/style/img/logo_index/remove-from-cart.svg" alt="naturel et bio">
        <h2>Naturel et Bio</h2>
        <p>Nos produits d’origine naturelle et principalement Bio.</p>
      </div>
      <div class="banner_text">
        <img src="../asset/style/img/logo_index/security.svg" alt="produit 100% leagaux">
        <h2>Produit 100% Légaux</h2>
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
