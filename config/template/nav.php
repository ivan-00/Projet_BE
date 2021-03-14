<nav>
    <a class="nav-logo" href="/Projet_BE/index.php">
        CBD HACE
    </a>
    <div class="nav-item-center">
    <form action="/Projet_BE/page/recherche.php" class="formulaire" method="post">
        <input class="champ" name="query" type="search" id="search-product" placeholder ="Rechercher un produit"/>
        <button type="submit" name="search"><i class="fa fa-search"></i></button>
    </form>
    <?php
        // echo $resultats;
    ?>
        <ul class="nav-item">
            <li><a href="/Projet_BE/categorie/fleur.php">Fleur CBD</a></li>
            <li><a href="/Projet_BE/categorie/vaporette.php">Nos Vaporisateurs / E-Cigarette</a></li>
            <li><a href="/Projet_BE/categorie/huile.php">Nos huiles</a></li>
            <li><a href="/Projet_BE/categorie/documentation.php">Documentation</a></li>
        </ul>
    </div>
        <div class="nav-compte">
            <div class="panier">
                <a href="/Projet_BE/page/panier.php"><i class="fas fa-shopping-cart"></i>Panier</a>
            </div>
            <div class="compte">
                <a href="/Projet_BE/page/login.php"> <i class="fas fa-user"></i> Compte client</a>
            </div>
        </div>
</nav>
<div class="breadcrumb">
    <a href="../index.php">Accueil</a> <span>></span> <a href="index.php"> Catégorie</a> <span>></span>
</div>