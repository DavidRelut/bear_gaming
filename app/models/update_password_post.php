    <?php 

		$title ="Bear Gaming";
        $css = "../public/scss/portal/portal.css";
        $js = "";
		include("./includes/header.php"); 

	?> 
    
    <?php

		# CONNECT TO DATABASE
		include("../database/load_bdd.php");
		$bdd = connection_mysql();

        // include("remove_cookies.php");
        // remove_cookies();

            # RECUPERATION INFO FORMULAIRE
            $last_password = $_POST["last_password"];
            $new_password = $_POST["new_password"];

            # RECUPERE LE PSEUDO PAR LE COOKIE 'existing_pseudo'
            $pseudo = $_COOKIE['existing_pseudo'];

            $query = $bdd->prepare("SELECT password FROM users WHERE pseudo=:pseudo");
            $query->execute(['pseudo'=>$pseudo]);
            $res = $query->fetch();
            $password = $res["password"];

            # SI LAST PASSWORD N'EST PAS BON, REDIRIGE AVEC MESSAGE ERREUR
            if (!password_verify($last_password, $password)){
                setcookie('error_password_not_exist', true, time() + 3, '/');
                header("Location: ../views/profile.php");
            }
            # SI LAST PASSWORD EST BON, UPDATE
            else {

                # CHECK SI LES MOTS DE PASSE SONT LES MÊMES
                if ($last_password == $new_password) {
                    setcookie("error_same_password", true, time() + 3, '/');
                    header("Location: ../views/profile.php");
                }
                else {

                    # RECUPERER LE MAIL DANS LA BD
                    $query = $bdd->prepare("SELECT email FROM users WHERE pseudo=:pseudo"); 
                    $query->execute(['pseudo'=>$pseudo]);
                    $res = $query->fetch();
                    $email = $res["email"];
    
                    # HASHAGE DU PASSWORD AVANT UPDATE EN BD
                    $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);
    
                    # UPDATE LA BD AVEC LE NOUVEAU MOT DE PASSE
                    $query = $bdd->prepare('UPDATE users SET password=:new_password_hash WHERE email=:email');
                    $query->execute(['new_password_hash'=>$new_password_hash, 'email'=>$email]);
    
                    setcookie("update_password", true, time() + 5, '/');
                    header("Location: ../views/profile.php");
                }

            }

        ?>