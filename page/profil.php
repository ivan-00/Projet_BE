<?php
session_start();
$bdd = new PDO("mysql:host=localhost;dbname=projetBackend;charset=utf8","root","root");
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
<section>
  <article>
    <h2>Bienvenu à toi jeune entrepreneur.</h2>
  </article>
  <article>
    <!-- pseudo -->
    <h2>Profil de 
      <?php 
      echo $userinfo['nom']; 
      ?>
      &nbsp
      <?php
      echo $userinfo ["last_name"]; 
      ?>
  
      
      
    </h2>
    <ul>
      <h3>Mes informations personels.</h3>
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
      <a class="link_edit_profil" href="editionprofil.php">Editer mon profil</a>
      <a class="link_deconnection" href="deconnexion.php">Se déconnecter</a>
    <?php
    }
    ?>
    <div>
      
    </div>
    <!-- Mail -->

  </article>
</section>
<?php }
else {
  header("location: login.php");
}
?>
<?php include '../config/template/footer.php'; ?>
