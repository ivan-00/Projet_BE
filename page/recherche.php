<?php
session_start();
$bdd = new PDO("mysql:host=localhost;dbname=projetBackend;charset=utf8","root","root");

$mot = $_POST['query'];

$search = $bdd->query("SELECT * FROM product WHERE nom_produit LIKE '% Fleur %' ");
if($reponse = $search->fetch()){
    echo "2";
}
else{
    echo "error";
}
?>