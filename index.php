<?php
session_start();
$bdd = new PDO("mysql:host=localhost;dbname=projetBackend;charset=utf8","root","root");
?>
<?php include 'config/template/head.php'; ?>
<header>
<?php include 'config/template/nav.php'; ?>
</header>
<div class="banner banner_accueil">
  <div class="banner_text">
    <img src="asset/style/img/logo_index/home.svg" alt="livraison express">
    <h1>Livraison express</h1>
    <p>La livraison en moins de 1h30 à Paris et moins de 2h30 en « Banlieues Proches » . Expédition sous 1 jour ouvré en France métropolitaine.</p>
  </div>
  <div class="banner_text">
    <img src="asset/style/img/logo_index/pay-per-click.svg" alt="paiement securisé">
    <h1>Paiement securisé</h1>
    <p>Nous acceptons différents moyens de paiement tous sécurisés. CB, Mastercard, Visa, Electron</p>
  </div>
  <div class="banner_text">
    <img src="asset/style/img/logo_index/remove-from-cart.svg" alt="naturel et bio">
    <h1>Naturel et Bio</h1>
    <p>Nos produits d’origine naturelle et principalement Bio.</p>
  </div>
  <div class="banner_text">
    <img src="asset/style/img/logo_index/security.svg" alt="produit 100% leagaux">
    <h1>Produit 100% Légaux</h1>
    <p>Nos produits contiennent un taux de THC inférieur à 0,2% et respectent la législation Européenne en vigueur.</p>
  </div>
</div>
<main>
  <section>
    <article class="entete_index">
      <h2>Découvrir nos produits CBD</h2>
      <p>Le Lab Shop est une boutique de CBD 100% légale à Paris qui vous offre un large choix de produits de grande qualité : Fleurs, Résines, E-Liquides, Huiles, Thés, Infusions, Miels, Alimentation, Boissons, Cosmétiques.</p>
    </article>
    <article class="produit_image">
      <div class="bloc_produit">
        <a href="categorie/fleur.php">
        <h1>Fleur de CBD</h1>
      <img src="asset/style/img/logo_index/img_cannabis.jpeg" alt="fleur de canabis ">
      </a>
    </div>
      <div class="bloc_produit">
        <a href="categorie/vaporette.php">
        <h1>Nos Vaporisateur / E-Cigarette</h1>
      <img src="asset/style/img/logo_index/img_vapo.jpeg" alt="credit unsplash image de cigarette electronique">
      </a>
      <a href="categorie/huile.php">
      <h1>Nos huiles</h1>
      <img src="asset/style/img/logo_index/img_huile.jpeg" alt="credit unsplash image d'huile de CBD ">
      </a>
    </div>
      <div class="bloc_produit">
        <a  href="categorie/documentation.php">
        <h1>Documents</h1>
      <img src="asset/style/img/logo_index/img_docu.jpeg" alt="credit unsplash image de livre sur les CBD">
      </a>
    </div>
    </article>

    <article class="carousel">
      <h2>Decouvrez nos Fleurs de CBD</h2>
      <div class='carousel_produit'>
      <?php
  // preparation de la requete.
  $request = $bdd->query("SELECT * FROM product WHERE categorie = 1");
  $produits = $request->fetchAll();
  $listeProduitsRetenues = [];
  ?>
  <div class='carousel' data-flickity='{ "wrapAround": true }'>
  <?php
  for ($compteur = 0; $compteur < 7; $compteur++) {
    
    /* $ligneRetenue = $produs[$comptr]; */ 
      echo "<div class='carousel-cell'>";
        echo '<a href="">';
          echo '<img src='.$produits[$compteur]["img"]." alt='Image CBD' class='image_produit' /> <br />";
        echo '</a>';
        echo "<h2 class='nom_produit'>". $produits[$compteur]["nom_produit"]. "</h2>";
        echo "<p class='titre_prix'> A partir de : " ."<p class='prix'>".$produits[$compteur]['prix']." €</p>";
      echo '</div>';
    // array_push()
  }
  ?> 
  </div>
  
      </div>
    </article>
  </section>
</main>
<?php include 'config/template/footer.php'; ?>