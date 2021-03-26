<?php
session_start();
// $bdd = new PDO("mysql:host=localhost;dbname=projetBackend;charset=utf8","root","root");
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
  if(isset($_POST["newname"]) AND !empty($_POST['newname']) AND !empty($_POST['newname']) AND $_POST['newname'] != $user['nom']) 
  {
    $newname = htmlspecialchars($_POST['newname']);
    $insertename = $bdd->prepare("UPDATE membre SET nom = ? WHERE id = ?");
    $insertename->execute(array($newname, $_SESSION['id']));
    header ("location: profil.php?id=".$_SESSION['id']);
  }
  if(isset($_POST["newnlastname"]) AND !empty($_POST['newnlastname']) AND !empty($_POST['newnlastname']) AND $_POST['newnlastname'] != $user['last_name']) 
  {
    $newnlastname = htmlspecialchars($_POST['newnlastname']);
    $insertenewnlastname = $bdd->prepare("UPDATE membre SET last_name = ? WHERE id = ?");
    $insertenewnlastname->execute(array($newnlastname, $_SESSION['id']));
    header ("location: profil.php?id=".$_SESSION['id']);
  }
  if(isset($_POST["newphone"]) AND !empty($_POST['newphone']) AND !empty($_POST['newphone']) AND $_POST['newphone'] != $user['phone-number']) 
  {
    $newphone = htmlspecialchars($_POST['newphone']);
    $insertenewphone = $bdd->prepare("UPDATE membre SET phone_number = ? WHERE id = ?");
    $insertenewphone->execute(array($newphone, $_SESSION['id']));
    header ("location: profil.php?id=".$_SESSION['id']);
  }
  // .................... FONCTIONNE PAS ..............................
  if(isset($_POST["newmdp"]) AND !empty($_POST['newmdp']) AND isset($_POST["newmdp2"]) AND !empty($_POST['newmdp2'])) 
  {
    $newmdp1 = sha1($_POST["newmdp"]);
    $newmdp2 = sha1($_POST["newmdp2"]);
    if($newmdp1 == $newmdp2) {
      $insertmdp = $bdd->prepare("UPDATE membre SET pass_md5 = ? WHERE id = ?");
      $insertmdp->execute(array($newmdp1, $_SESSION['id']));
      header ("location: profil.php?id=".$_SESSION['id']);
    }
    else {
      $msg = "Votre mot de passe ne correspondent pas.";
    }
  // .................... FONCTIONNE PAS ..............................
  }
?>
<div class="banner banner_profil">
  <h1>Mon profil</h1>
</div>
  <section class="editprofil">
    <article>
      <h2>Edition de mon profil</h2>
      <hr>
        <form method="POST" action="" class="form-edit_profil">
          <div class="edit_section">
            <label for="name">Votre Nom:</label>
            <input  id="name" type="text" name="newname" placeholder="Votre nouveau nom" value="<?php echo $user["nom"];?>">
          </div>
          <div class="edit_section">
            <label for="newnlastname">Votre prénom:</label>
            <input id="newnlastname" type="text" name="newnlastname" placeholder="Votre nouveau Prénom"value="<?php echo $user["last_name"];?>">
          </div>
          <div class="edit_section">
            <label for="newphone">Votre numero de téléphone:</label>
            <input pattern="(0|\\+33|0033)[1-9][0-9]{8}" id="newphone" type="text" placeholder="0698765432" name="newphone" placeholder="Votre nouveau numero de téléphone"value="<?php echo $user["phone_number"];?>">
              
          </div>
          <div class="edit_section">
            <label for="">Mot de passe:</label>
            <input pattern="a" type="password" name="newmdp" placeholder="Nouveau mot de passe">
          </div>

          <div class="edit_section">
            <label for="newmdp">Confirmez votre mot de passe:</label>
            <input pattern="a" id="newmdp" type="password" name="newmdp2" placeholder="Confirmez votre mot de passe">

          <div class="edit_section">
            <label for="">Département</label>
            <select name="newdpt" id="dpt">
              <option value="1">--Choisir un départment--</option>
              <option value="2">Paris</option>
              <option value="3">La lune</option>
            </select>
          </div>
            <input class="submit" type="submit" value="Mettre à jour mon profil">
            <?php
          if (isset($msg)){ echo "<div class='erreur_connect'>". $msg."</div>";} ?>
        </form>
    </article>
  </section>
<?php }
else {
  header("location: login.php");
}
?>
<?php include '../config/template/footer.php'; ?>
