<?php 
	$title ="Bear Gaming";
    $css = "../public/scss/portal/portal.css";
    $js = "";
	include("./includes/header.php"); 
?> 

<?php 

// EDIT PSEUDO PROFILE //

	# CONNECT TO DATABASE
	include("../database/load_bdd.php");
	$bdd = connection_mysql();

    
    # RECOVER FORM INFORMATION
    $last_pseudo = $_POST["last_pseudo"];
    $new_pseudo = $_POST["new_pseudo"];     

    // # RECOVER PSEUDO BY COOKIE 'existing_email'
    $email = $_COOKIE['existing_email'];

    # RETRIEVE PSEUDO ASSOCIATED WITH THE FORM EMAIL -->
    $query = $bdd->prepare("SELECT pseudo FROM users WHERE email=:email");
    $query->execute(['email'=>$email]);
    $res = $query->fetch();
    $pseudo = $res['pseudo'];


    # IF LAST PSEUDO NOT GOOD, REDIRECT TO PROFILE
    if ($last_pseudo != $pseudo){
        setcookie('error_pseudo_not_exist', true, time() + 3, '/');
        header("Location: ../views/profile.php");
    }
    # SI LAST PSEUDO IS GOOD
    else {

        # CHECK IF PSEUDO ARE THE SAME
        if ($last_pseudo == $new_pseudo) {
            setcookie("error_same_pseudo", true, time() + 3, '/');
            header("Location: ../views/profile.php");
        }

        else 
        {

            # RECOVER EMAIL IN THE DB
            $query = $bdd->prepare("SELECT email FROM users WHERE email=:email"); 
            $query->execute(['email'=>$email]);
            $res = $query->fetch();
            $email = $res['email'];

            # UPDATE DB WITH NEW PASSWORD
            $query = $bdd->prepare('UPDATE users SET pseudo=:new_pseudo WHERE email=:email');
            $query->execute(['new_pseudo'=>$new_pseudo, 'email'=>$email]);
            $res = $query->fetch();
			$pseudo_update = $res['pseudo'];

            // setcookie("pseudo_update", $pseudo_update, time() + 48200, '/');
            setcookie("update_pseudo", true, time() + 5, '/');
            header("Location: ../views/profile.php");
        }

    }

?>