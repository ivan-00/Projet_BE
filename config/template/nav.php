<nav>
    <a class="nav-logo" href="/index.php">
        CBD HACE
    </a>
    <div class="nav-item-center">
    <form action="/page/recherche.php" class="formulaire" method="post">
        <input class="champ" name="query" type="search" id="search-product" placeholder ="Rechercher un produit"/>
        <button type="submit" name="search"><i class="fa fa-search"></i></button>
    </form>
    <?php
        // echo $resultats;
    ?>
        <ul class="nav-item">
            <li><a href="/categorie/fleur.php">Fleur CBD</a></li>
            <li><a href="/categorie/vaporette.php">Nos Vaporisateurs / E-Cigarette</a></li>
            <li><a href="/categorie/huile.php">Nos huiles</a></li>
            <li><a href="/categorie/documentation.php">Documentation</a></li>
        </ul>
    </div>
        <div class="nav-compte">
            <div class="panier">
                <a href="/page/panier.php"><i class="fas fa-shopping-cart"></i>Panier</a>
            </div>

            <div class="compte">
                <a href='/page/login.php'> <i class="fas fa-user"></i> Compte client</a>
            </div>
        </div>
</nav>