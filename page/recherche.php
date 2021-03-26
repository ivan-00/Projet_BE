<?php
session_start();
require '../config/init.php';

$mot = $_POST['query'];

$search = $bdd->query("SELECT * FROM product WHERE nom_produit LIKE '% Fleur %' ");
if($reponse = $search->fetch()){
    echo "2";
}
else{
    echo "error";
}
?>