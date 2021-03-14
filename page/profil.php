<?php
session_start();
if (isset($_POST["nom"]) AND !empty($_POST["nom"])) {
  $_SESSION["nom"] = $_POST["nom"];
}
setcookie($_SESSION['nom'], time() + 365*24*3600, null, null, false, true);
$bdd = new PDO("mysql:host=localhost;dbname=projetBackend;charset=utf8","root","root");
include_once('../config/cookie_connect.php');
?>
<?php include '../config/template/head.php'; ?>
<header>
    <?php include '../config/template/nav.php'; ?>
</header>
<?php

// ...........................................................
if(isset($_GET['id']) AND $_GET ['id'] > 0 )
{
  $getid = intval($_GET['id']);
  $requser = $bdd -> prepare('SELECT * FROM membre WHERE id = ?');
  $requser->execute(array($getid));
  $userinfo = $requser->fetch();
?>

<div class="banner banner_profil">
  <h1>Mon profil</h1>
</div>
<section class="profil_file">
    <h2>Bienvenu à toi jeune entrepreneur.</h2>
  <article>
    <hr>
    <!-- pseudo -->
    <h3>Profil de 
      <?php 
      echo $userinfo['nom'];
      ?>
      &nbsp
      <?php
      echo $userinfo ["last_name"]; 
      ?>
    </h3>
    <ul>
      <h4>Mes informations personelles.</h4>
      <li class="user-name" >
      Adresse mail: <strong> <?php echo $userinfo ["email"];?> </strong> 
      </li>
      <li class="user-name">
      Votre numero de téléphone: <strong> <?php echo $userinfo['phone_number'];?> </strong> 
      </li>
      <li class="user-name">
        Vous habitez à <strong> <?php echo $userinfo ['departement'];?> </strong>
      </li>
    </ul>
    <!-- Verification url profil  -->
    <?php
    if ((isset($_SESSION['id'])) AND $userinfo ['id'] == $_SESSION['id']) 
    {?>
    <div class="buton_profil">
      <a class="link edit_profil" href="editionprofil.php">Editer mon profil</a>
      <a class="link deconnection" href="deconnexion.php">Se déconnecter</a>
    </div>
    <?php
    }
    ?>
  </article>
</section>
<?php }
else {
  header("location: login.php");
}
?>
<?php include '../config/template/footer.php'; ?>
