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
if(isset($_SESSION['id']))
{
  $requser =$bdd->prepare("SELECT * FROM membre WHERE id = ?");
  $requser-> execute(array($_SESSION["id"]));
  $user = $requser->fetch(); 

  if(isset($_POST["newname"]) AND!empty($_POST['newname']) AND !empty($_POST['newname']) AND $_POST['newname'] != $user['nom']) 
  {
    $newname = htmlspecialchars($_POST['newname']);
    $insertename = $bdd->prepare("UPDATE membre SET nom = ? WHERE id = ?");
    $insertename->execute(array($newname, $_SESSION['id']));
    header ("location: profil.php?id=".$_SESSION['id']);
    exit();
  }

  if(isset($_POST["newnlastname"]) AND!empty($_POST['newnlastname']) AND !empty($_POST['newnlastname']) AND $_POST['newnlastname'] != $user['newnlastname']) 
  {
    $newnlastname = htmlspecialchars($_POST['newnlastname']);
    $insertenewnlastname = $bdd->prepare("UPDATE membre SET last_name = ? WHERE id = ?");
    $insertenewnlastname->execute(array($newnlastname, $_SESSION['id']));
    header ("location: profil.php?id=".$_SESSION['id']);
    exit();
  }

  if(isset($_POST["newphone"]) AND!empty($_POST['newphone']) AND !empty($_POST['newphone']) AND $_POST['newphone'] != $user['newphone']) 
  {
    $newphone = htmlspecialchars($_POST['newphone']);
    $insertenewphone = $bdd->prepare("UPDATE membre SET phone_number = ? WHERE id = ?");
    $insertenewphone->execute(array($newphone, $_SESSION['id']));
    header ("location: profil.php?id=".$_SESSION['id']);
    exit();
  }
  else {
    echo "fonctionne pas";
  }

?>
<div class="banner banner_profil">
  <h1>Mon profil</h1>
</div>
<section>
  <article>
    <h2>Edition mon profil</h2>
    <fieldset class="fiedlset-profile">
      <form method="POST" action="" class="form-edit_profil">
        <div class="">
          <label for="name">Votre Nom</label>
          <input  id="name" type="text" name="newname" placeholder="Votre nouveau nom" value="<?php echo $user["nom"];?>">
        </div>
        <div class="">
          <label for="newnlastname">Votre prénom</label>
          <input id="newnlastname" type="text" name="newnlastname" placeholder="Votre nouveau Prénom"value="<?php echo $user["last_name"];?>">
        </div>
        <div class="">
          <label for="newphone">Votre numero de téléphone</label>
          <input id="newphone" type="text" name="newphone" placeholder="Votre nouveau numero de téléphone"value="<?php echo $user["phone_number"];?>">
            <label for="">Mot de passe:</label>
        </div>
        <div class="">
          <input type="password" name="newmdp" placeholder="Nouveau mot de passe">
          <label for="newmdp">Confirmez votre mot de passe</label>
          <input id="newmdp" type="password" name="newmdp2" placeholder="Confirmez votre mot de passe">
        </div>
        <div class="">
          <label for="">Département</label>
          <select name="newdpt" id="dpt">
            <option value="1">--Choisir un départment--</option>
            <option value="2">Paris</option>
            <option value="3">La lune</option>
          </select>
        </div>
          <input type="submit" value="Mettre à jour mon profil">
      </form>
    </fieldset>
  </article>
</section>
<?php }
// else {
//   header("location: login.php");
// }
?>
<?php include '../config/template/footer.php'; ?>
