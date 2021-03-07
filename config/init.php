<?php
  try//connexion à la bdd
  {
    $bdd = new PDO("mysql:host=localhost;dbname=projetBackend;charset=utf8","root","root");
  }
  catch(Exception $e)
  {
    die("Une erreur s'est produite.");
  }
//variable d'affichage etc. 

//constantes système 

require 'function.php';
