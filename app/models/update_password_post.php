<?php 
	$title ="Bear Gaming";
    $css = "../public/scss/portal/portal.css";
    $js = "";
	include("./includes/header.php"); 
?> 
    
<?php
// EDIT PASSWORD PROFILE //

    # CONNECT TO DATABASE
    include("../database/load_bdd.php");
    $bdd = connection_mysql();

    // include("remove_cookies.php");
    // remove_cookies();

    # RECOVER FORM INFORMATION
    $last_password = $_POST["last_password"];
    $new_password = $_POST["new_password"];

    // # RECOVER PASSWORD BY COOKIE 'existing_password'
    $email = $_COOKIE['existing_email'];

    # RETRIEVE PASSWORD ASSOCIATED WITH THE FORM EMAIL
    $query = $bdd->prepare("SELECT password FROM users WHERE email=:email");
    $query->execute(['email'=>$email]);
    $res = $query->fetch();
    $password = $res["password"];

    # IF LAST PASSWORD NOT GOOD, REDIRECT TO PROFILE
    if (!password_verify($last_password, $password)){
        setcookie('error_password_not_exist', true, time() + 3, '/');
        header("Location: ../views/profile.php");
    }
    # SI LAST PASSWORD IS GOOD
    else {

        # CCHECK IF PSEUDO ARE THE SAME
        if ($last_password == $new_password) {
            setcookie("error_same_password", true, time() + 3, '/');
            header("Location: ../views/profile.php");
        }

        else 
        {

            # RECOVER EMAIL IN THE DB
            $query = $bdd->prepare("SELECT email FROM users WHERE email=:email"); 
            $query->execute(['email'=>$email]);
            $res = $query->fetch();
            $email = $res["email"];

            # HASH PASSWORD BEFORE UPDATING IN DB
            $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);

            # UPDATE LA BD AVEC LE NOUVEAU MOT DE PASSE
            $query = $bdd->prepare('UPDATE users SET password=:new_password_hash WHERE email=:email');
            $query->execute(['new_password_hash'=>$new_password_hash, 'email'=>$email]);

            setcookie("update_password", true, time() + 5, '/');
            header("Location: ../views/profile.php");
        }

    }
?>