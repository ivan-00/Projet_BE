<?php
session_start();
$bdd = new PDO("mysql:host=localhost;dbname=projetBackend;charset=utf8","root","root");
?>
<?php include 'config/template/head.php'; ?>
<header>
<?php include 'config/template/nav.php'; ?>
</header>
<h2 class="text-center mt-5 mb-5">Page Accueil</h2>
<a class="ariane_top" href=""></a>
<hr>
<?php include 'config/template/footer.php'; ?>