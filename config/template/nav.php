<?php
    include 'Propjet_BE/config/template/head.php';
?>
<nav>
    <a class="nav-logo" href="">
        CBD HACE
    </a>
    <div class="nav-item-center">
    <form action="" class="formulaire">
        <input class="champ" type="text" placeholder ="Rechercher un produit"/>
        <button type="submit"><i class="fa fa-search"></i></button>
    </form>
        <ul class="nav-item">
            <li><a href="/Projet_back-end/Projet_BE/categorie/fleur.php">Fleur CBD</a></li>
            <li><a href="/Projet_back-end/Projet_BE/categorie/vaporette.php">Nos Vaporisateur / E-Cigarette</a></li>
            <li><a href="/Projet_back-end/Projet_BE/categorie/huile.php">Nos huiles</a></li>
            <li><a href="/Projet_back-end/Projet_BE/categorie/documentation.php">Documentation</a></li>
        </ul>
    </div>
        <div class="nav-compte">
            <a href="/Projet_back-end/Projet_BE/page/panier.php"><i class="fas fa-shopping-cart"></i>Panier</a>
            <a href="/Projet_back-end/Projet_BE/page/login.php"> <i class="fas fa-user"></i> Compte client</a>
        </div>
</nav>