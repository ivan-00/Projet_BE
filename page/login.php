<?php
session_start();
$bdd = new PDO("mysql:host=localhost;dbname=projetBackend;charset=utf8","root","root");

// INSCRIPTION
if(isset($_POST['forminscription']))
{
    $lastname = htmlspecialchars($_POST['lastname']);
    $name = htmlspecialchars($_POST['name']);
    $password = sha1($_POST['password']);
    $confirm_password = sha1($_POST['confirm_password']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dept = htmlspecialchars($_POST['dept']);
        if(!empty($_POST['lastname']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password']) && !empty($_POST['phone']) && !empty($_POST['dept'])) 
            {
            // Length de pseudo 
            $lastnamelenght = strlen($lastname);
            if ($lastnamelenght <= 10) 
            {
                if (filter_var($email, FILTER_VALIDATE_EMAIL))
                {
                    $reqmail =$bdd -> prepare("SELECT * FROM membre WHERE email = ?");
                    $reqmail-> execute(array($email));
                    $emailexist = $reqmail->rowCount();
                    if($emailexist == 0)
                    {
                        if($password == $confirm_password) 
                        {
                            $insertmbr = $bdd->prepare("INSERT INTO membre(last_name, nom, email, pass_md5, phone_number, departement) VALUES (?, ?, ?, ? ,? ,?)");
                            $insertmbr->execute(array($lastname, $name, $email, $password, $phone, $dept));
                            $_SESSION ['comptecree'] = "Votre compte a bien été créé !";
                            header('location: profil.php');
                            exit();
                        }
                        else { 
                            $erreur = "Les mots de passe ne corespondent pas !";
                        }
                    }
                    else {
                        $erreur = "Mail deja utilisé";
                    }    
                }
                else {
                    $erreur = "vrai eamil";
                }
            }
            else {
                $erreur = "Votre prénom ne doit pas dépasser plus de 10 caractéres !";
            }
                    }
        else { 
            $erreur = "Tous les champs doivent être complétés !!";
        }
}
?>
<!-- FIN INSCRIPTION -->
<!-- CONNEXION -->
<?php
if (isset($_POST['formeconection']))
{
    $emailconnect = htmlspecialchars($_POST['emailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
        if(!empty($emailconnect) AND !empty($mdpconnect))
        {
            $requser = $bdd->prepare("SELECT * FROM membre WHERE email = ? AND pass_md5 = ?");
            $requser -> execute(array ($emailconnect, $mdpconnect));
            $userexist = $requser->rowCount();
            if($userexist == 1) {
                $userinfo = $requser->fetch();
                $_SESSION['id'] = $userinfo['id'];
                $_SESSION['email'] = $userinfo['email'];
                $_SESSION['nom'] = $userinfo['nom'];
                header('Location: profil.php?id='.$_SESSION['id']);
            }
            else {
                $erreurcoonnect ="Mauvais identifiant/mot de passe";
            }
        }
        else {
            $erreurcoonnect ="Tout les champs doivents étre complétés";
        }
}
?>
<!-- FIN CONNEXION -->
<?php include '../config/template/head.php'; ?>
<header>
    <?php include '../config/template/nav.php'; ?>
</header>
<div class="banner banner_profil">
    <h1>Se connecter</h1>
</div>
<div class="containt">
	<div class="bloc_connexion">
		<h4>Connexion</h4>
		<hr>
		<fieldset class="connexion"> 
			<form class="form" action="" method="POST">
            <?php
            ?>
				<div class="input">
					<label  for="email">Adresse de mesagerie *</label>
					<input value="<?php if(isset($emailconnect)){echo $emailconnect;} ?>"name="emailconnect" type="email" >
				</div> 
	<div class="input">
		<label for="password">Mot de passe *</label>
		<input name="mdpconnect" type="password">
	</div>
	<div class="bloc_submit">
        <button name="formeconection" type="submit">Se connecter</button>
        <!-- se souvenir de moi -->
        <div class="remember">
            <input type="checkbox">
            <label for="text">Se souvenir de moi.</label>
        </div>
	</div>
    <?php
        if (isset($erreurcoonnect))
        {
            echo "<div class='erreur_connect'>". $erreurcoonnect ."</div>";
        }
    ?>
			</form>
		</fieldset>
	</div>
    <!-- Register -->
    <div class="bloc_register">
        <h4>S'enregistrer</h4>
        <hr>
        <fieldset class="register">
        <form class="form" action="" method="POST">
            <div class="input">
                <label for="lastname">Prénom: *</label>
                <input name="lastname" value="<?php if(isset($lastname)){echo $lastname;} ?>" type="text">
            </div>
            <div class="input">
                <label for="name">Nom: *</label>
                <input name="name" value="<?php if(isset($name)){echo $name;} ?>" type="text">
            </div>
            <div class="input">
                <label for="email">Adresse mail: *</label>
                <input name="email" value="<?php if(isset($email)){echo $email;} ?>" type="email">
            </div>
            <div class="input">
                <label for="password">Mot de passe: *</label>
                <input name="password" type="password">
            </div>
            <div class="input">
                <label for="confirm_password">Confirmez votre mot de passe: *</label>
                <input name="confirm_password" type="password">
            </div>
            <!-- <div class=" input gender">
                <label for="gender">Civilité: *</label>
								<div class="select_gender">
									<input value="homme" type="radio" name="gender">
									<label for="">Monsieur</label>
									<input value="femme"  type="radio" name="gender">
									<label for="">Madame</label>
									<input value="autres"  type="radio" name="gender">
									<label for="">Autres</label>
								</div>
            </div> -->
            <div class="input">
                <label for="dept">Département:</label>
                <select name="dept" id="">
                    <option value="1">--Choisir un département--</option>
                    <option value="2">--PARIS--</option>
                    <!-- https://blog.ludikreation.com/utile-tableaux-php-des-regions-et-departements-de-france/  -->
                </select>
            </div>
            <div class="input">
                <label for="phone">Numéro de téléphone: *</label>
                <input name="phone" type="tel" value="<?php if (isset($phone)){echo $phone;} ?>">
            </div>
            <button type="submit" name="forminscription">S'enregistrer</button>
            <!-- erreur champs incomplet -->
            <?php
            if (isset($erreur))
            {
                echo "<div class='erreur'>". $erreur ."</div>";
            }
            ?>
        </form>
        </fieldset>
    </div>
</div>
<?php include '../config/template/footer.php'; 