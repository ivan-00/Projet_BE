<head>
<?php include '../config/template/head.php';?>
</head>
<?php 

include '../config/template/nav.php';
?>
<div class="banner banner_huile">
  <h1>Nos Huiles</h1>
  <p>Les huiles CBD permettent à chacun de renouveler sa consommation, sans aucune agression pour son corps. Il est en effet possible de consommer de l’huile enrichie en CBD de multiples façons créatives et saines. Découvrez nos huiles à spectre complet à teneur 40 % CBD, 100 % légales. Elles sont adaptées aux consommateurs réguliers et avertis qui ressentent le besoin d’intensifier le dosage. <br> <br>
  Fleuron de la Gamme Le Lab, notre huile à 40 % de CBD a fait l’objet de nombreux tests avant de vous être proposée pour assurer votre entière satisfaction. Elle dispose de toutes les accréditations nécessaires à garantir sa légalité ainsi que sa sécurité pour votre bien-être.</p>
</div>
<div class="list_produit">
  <?php
  // preparation de la requete.
  $bdd = new PDO("mysql:host=localhost;dbname=projetBackend;charset=utf8","root","root");

  $request = $bdd->query("SELECT * FROM product WHERE categorie = 2");


  $produits = $request->fetchAll();

  foreach ($produits as $produit) {
    echo "<div class='tuile''>";
      echo '<a href="">';
      echo '<img src='.$produit["img"]." alt='Image CBD' class='image_produit' /> <br />";
      echo "<h2 class='nom_produit'>". $produit["nom_produit"]. "</h2>";
      echo "<p class='titre_prix'> A partir de : " ."<p class='prix'>".$produit['prix']." €</p>";
      echo '</a>';
    echo "</div>";
  }
  ?> 
</div>
<!-- Section Article -->
<section class="section_article">
  <article>
    <h3>Comment choisir une huile CBD 15 % ?</h3>
    <p>Nous sommes de fervents défenseurs d’une consommation d’huile au CBD, et de CBD en général, qui soit pérenne pour la nature autant que pour le consommateur. Nous sélectionnons donc des produits de qualité afin de satisfaire nos clients et de servir d’exemple dans l’industrie du CBD.
    Nos huiles CBD 15 % sont ainsi enrichies à 15 % de CBD dans le plus grand respect de notre cahier des charges. Pour répondre à toutes les envies, nous les avons déclinées dans leur version classique, l’huile au chanvre 15 % CBD, ainsi que dans des versions avec des arômes ajoutés. Nous avons sélectionné la qualité pour vous, il ne vous reste qu’à choisir votre goût.
    Les huiles à 15 % de CBD sont adaptées aux consommateurs de CBD souhaitant augmenter leur dosage. Pour les débutants ou les consommateurs chevronnés, il existe d’autres teneurs dans notre large offre d’huiles au CBD. Découvrez aussi le dernier venu dans notre offre d’huiles, avec nos huiles au CBG.
</p>
  </article>
  <article>
    <h3>Huiles Full Spectrum 15 % CBD</h3>
    <p>L’huile de CBD Full Spectrum vient renforcer notre Gamme Le Lab pour vous apporter le meilleur du CBD en huile. L’huile à teneur de 15% de CBD est adaptée pour les consommateurs confirmés qui recherchent un effet doux ou aux débutants qui cherchent à accroître leurs sensations après des essais sur nos huiles 5% et 10%.
L’huile Full Spectrum est obtenue à partir d’extrait naturel de chanvre. Elle est appelée ainsi en opposition aux huiles obtenues à partir de cristaux de CBD, car elle embarque également d’autres principes actifs du chanvre et offre un effet complet, appelé “effet d’entourage” ou full spectrum en anglais. 
Le format du flacon est de 10 ml et est adapté à la découverte du produit. C’est un contenant idéal pour essayer et comparer plusieurs e-liquides. Pour les convaincus, nous recommandons d’opter davantage pour un format 30ml.</p>
  </article>
  <article>
    <h3>Gamme le Lab</h3>
    <p>Gamme le Lab
Notre huile CBD Full Spectrum à 15 % de CBD fait partie de la Gamme Le Lab et offre toutes les garanties qu’elle implique. Intégralement légale et conforme aux réglementations en vigueur, elle peut être consommée par voie orale, directement, en infusion ou intégrée à vos recettes préférées.</p>
  </article>
  <article>
    <h3>Gamme le Lab</h3>
    <p>Trois Arômes Disponibles
Chanvre (goût originel)
Ananas (Arômes naturels)
Cerise (Arômes naturels).
Les huiles à 15 % de CBD sont adaptées aux consommateurs de CBD souhaitant augmenter leur dosage. Pour les débutants ou les consommateurs chevronnés, il existe d’autres teneurs dans notre large offre d’huiles au CBD. Découvrez aussi le dernier venu dans notre offre d’huiles, avec nos huiles au CBG.</p>
  </article>
</section>
<?php
include '../config/template/footer.php';
?>