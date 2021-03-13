<head> <?php include '../config/template/head.php';?> </head>

<?php
include '../config/template/nav.php';
?>
<div class="banner banner_fleur">
  <h1>Nos fleurs</h1>
  <p>Les huiles CBD permettent à chacun de renouveler sa consommation, sans aucune agression pour son corps. Il est en effet possible de consommer de l’huile enrichie en CBD de multiples façons créatives et saines. Découvrez nos huiles à spectre complet à teneur 40 % CBD, 100 % légales. Elles sont adaptées aux consommateurs réguliers et avertis qui ressentent le besoin d’intensifier le dosage.
  Fleuron de la Gamme Le Lab, notre huile à 40 % de CBD a fait l’objet de nombreux tests avant de vous être proposée pour assurer votre entière satisfaction. Elle dispose de toutes les accréditations nécessaires à garantir sa légalité ainsi que sa sécurité pour votre bien-être.</p>
</div>
<!-- Nombre de produit disponible.  -->
<div></div>
<!--  -->
<div class="list_produit">
  <?php
  // preparation de la requete.
  $bdd = new PDO("mysql:host=localhost;dbname=projetBackend;charset=utf8","root","root");

  $request = $bdd->query("SELECT * FROM product WHERE categorie = 1");

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
    <h3>Le meilleur des fleurs CBD</h3>
    <p>Si les fleurs CBD vendues par Lab Shop contiennent très peu de THC, elles sont gorgées de senteurs pour vous procurer des sensations agréables lors de chaque consommation. Les fleurs CBD, parfois appelées herbe CBD, sont particulièrement appréciées, car elles apportent un vrai plaisir gustatif. On retrouve une grande variété de fleurs CBD 100 % légales : on peut citer la fleur CBD Afghan Kush, fleur CBD Alien Skunk, fleur CBD Haze, fleur CBD Orange bud…</p>
  </article>
  <article>
      <h3>Quels sont les bienfaits des fleurs de CBD ?</h3>
        <p>La fleur de CBD regorge de nombreuses propriétés utiles à l’homme. Séparées de la substance du THC, les fleurs de CBD permettent: <br>
<br>
        De faciliter la relaxation, la tranquillité et le calme <br>
        De combattre le stress et l’anxiété <br>
        Faire disparaître les nausées <br>
        Calmer les inflammations <br>
        Sur recommandation médicale pour supporter certaines douleurs<br>
        Lutter contre certaines dépendances (alcool, jeux)</p>
  </article>
  <article>
    <h3>Comment utiliser les fleurs de CBD ?</h3>
    <p>Les fleurs de CBD s’utilisent sous plusieurs façons, les plus courantes sont l’herbe brute disponible dans de petits emballages. On s’en sert principalement pour préparer des infusions de CBD aux vertus reconnues pour la santé. La fleur peut également s’utiliser en pollen résineux, en vaporisation ou en application locale avec nos huiles CBD, en baume à base de CBD pour lutter contre les inflammations ou encore en E liquide réaliser uniquement avec la fleur de CBD.
  </p>
  </article>
  <article>
    <h3>Quels sont les types de fleurs CBD que l’on trouve chez le Lab Shop ?</h3>
    <p>Retrouvez plusieurs variétés de produits cannabidiol, légales et respectueuses de la réglementation française, dans notre shop de CBD (disponibles en livraison ou en boutique). Toutes nos fleurs de cannabidiol sont spécialement cultivées par nos experts pour contenir seulement ou presque entièrement de la CBD. Contrairement à la variété contenant du THC standard, la fleur de CBD contient une quantité de THC inférieur à 0,2 %. La génétique et l’origine des plantes varient en fonction de la production et du besoin de chacun. Le Lab Shop CBD sélectionne les meilleures fleurs de CBD sur le marché. Parmi les plus populaires, on retrouve l’Afghan Kush qui est l’une des plus belles qualités indoor que l’on puisse trouver.
  </p>
  </article>
</section>

<?php
include '../config/template/footer.php';







