<?php

//connexion PDO
  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'projetBackend';
  $db_port = 8889;

  $mysqli = new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );

  $mysqli->close();

//variable d'affichage etc. 

//constantes système 

require 'function.php';
