<?php include '../config/template/head.php'; ?>
<header>
    <?php include '../config/template/nav.php'; ?>
</header>
<div class="banner banner_profil">
  <h1>Se connecter</h1>
</div>
<div class="containt">
    <div class="connexion">
        <h4>Connexion</h4>
        <hr>
        <form class="form" action="" method="POST">
            <div>
                <label for="email">Adresse de mesagerie *</label>
                <input type="email" require>
            </div>
            <div>
                <label for="password">Mot de passe *</label>
                <input type="password" require>
            </div>
            <button type="submit">S'enregistrer</button>
            <!-- se souvenir de moi -->
            <div>
            <input type="checkbox">
            <label for="text">Se souvenir de moi.</label>
            </div>
        </form>
</div>
    <div>
        <h4>S'enregistrer</h4>
        <hr>
        <form class="form" action="" method="POST">
            <div class="last_name">
                <label for="text">Prénom: *</label>
                <input type="text">
            </div>
            <div class="name">
                <label for="text">Nom: *</label>
                <input type="text">
            </div>
            <div class="email">
                <label for="email">Adresse mail: *</label>
                <input type="text">
            </div>
            <div class="password">
                <label for="password">Mot de passe: *</label>
                <input type="text">
            </div>
            <div class="confirm_password">
                <label for="password">Confirmez votre mot de passe: *</label>
                <input type="text">
            </div>
            <div class="gender">
                <label for="">Civilité: *</label>
                <input type="radio" name="gender">
                <label for="">Monsieur</label>
                <input type="radio" name="gender">
                <label for="">Madame</label>
                <input type="radio" name="gender">
                <label for="">Autres</label>
            </div>
            <div class="departement">
                <label for="">département</label>
                <select name="dept" id="">
                    <option value="detp">--Choisir un département--</option>
                    <!-- https://blog.ludikreation.com/utile-tableaux-php-des-regions-et-departements-de-france/ -->
                </select>
            </div>
            <div class="phone_number">
                <label for="phone">Numéro de téléphone: *</label>
                <input type="tel">
            </div>
            <button type="submit">S'enregistrer</button>
        </form>
</div>
</div>
<?php include 'config/template/footer.php'; ?>