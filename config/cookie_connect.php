<?php
if (!isset($_SESSION['id']) AND isset($_COOKIE['email'],$_COOKIE['password']) AND !empty($_COOKIE['email']) AND !empty($_COOKIE['password'])){
      $requser = $bdd->prepare("SELECT * FROM membre WHERE email = ? AND pass_md5 = ?");
      $requser -> execute(array ($_COOKIE['email'],$_COOKIE['password']));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
        $userinfo = $requser->fetch();
        $_SESSION['id'] = $userinfo['id'];
        $_SESSION['email'] = $userinfo['email'];
        $_SESSION['nom'] = $userinfo['nom'];
        }
    }
?>