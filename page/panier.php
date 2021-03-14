<?php
session_start();
$bdd = new PDO("mysql:host=localhost;dbname=projetBackend;charset=utf8","root","root");
?>
<?php include '../config/template/head.php'; ?>
<header>
    <?php include '../config/template/nav.php'; ?>
</header>
<div class="banner banner_panier">
  <h1>Mon panier</h1>
</div>
<?php include 'config/template/footer.php'; ?>