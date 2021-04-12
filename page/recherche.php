<?php
require '../config/init.php';

$mot = $_POST['query'];
$search = $bdd->query("SELECT * FROM product WHERE nom_produit LIKE '% $mot %' ");
if($reponse = $search->fetch()){
    echo "2";
}
else{
    echo "error";
}
?>