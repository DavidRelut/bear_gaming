<!DOCTYPE html>
<html lang="en">
	<head>	
		<link rel="shortcut icon" type="image/png" href="../public/images/favicon.png"/>
		<?php 
		    $title ="Bear Gaming | Profile";
            $css = "../public/scss/profile/profile.css";
            $js = "";
		    include("./includes/header.php"); 
	    ?> 
	</head>

    

    <body>

        <?php 
            if (!isset($_COOKIE['existing_pseudo'])){
                header('refresh:3; url=index.php');
            }
            else {
                $pseudo = $_COOKIE['existing_pseudo'];
                // echo "You're logged in as $pseudo";
                //  header('Location: profile.php');
        ?> 
        <video autoplay muted loop>
            <source src="../public/videos/fairy_forest.mp4"></source>
        </video>
        
       <header>
            <img class="logo" src="../public/images/favicon.png" alt="logo">
            <ul>
                <li><a class="portal-a" href="./portal.php" title="Home">HOME</a></li>
                <li><a class="portal-a" href="./profile.php" title="Profile">PROFILE</a></li>
                <li><a class="portal-a" href="./logout.php" title="Logout"><img class="logout" src="../public/images/MultiversePlanetPortal.png" alt="logout"></a><br></li>
            </ul>
        </header>
        
        <section>
            <div class="card-information">
                <h1>INFORMATION PROFILE</h1><br><br>
                <?php
                    include("../database/load_bdd.php");
	                $bdd = connection_mysql(); 

                    $pseudo = $_COOKIE['existing_pseudo'];

                    #QUERY POUR RECUPERER LES INFOS PROFIL
                    $query = $bdd->prepare("SELECT photo_profile, email, date_inscription FROM users WHERE pseudo=:pseudo");
                    $query->execute(['pseudo'=>$pseudo]);
                    $res = $query->fetch();
                    $photo_profile = $res['photo_profile'];
                    $email = $res['email'];
                    $date_inscription = $res['date_inscription'];

                    # PRINT INFO PROFIL
                    echo ("<a href='../views/portal.php'><img class='game' src = '. $photo_profile .'></a>");
                    echo "<br><br><h1> Hello $pseudo ! Welcome on your PROFIL !</h1><br><br>";
                    echo "<b> pseudo</b> : $pseudo";
                    echo "<br><br><b> Your email:</b> : $email";
                    echo "<br><br><b> Account created the : </b>  $date_inscription<br><br><br><br>";

                    if (isset($_COOKIE['error_password_not_exist'])){
                        echo "<p style='color:red';><b> Old password entered is incorrect.</br></p>";

                    }
                    if(isset($_COOKIE['error_same_password'])){
                        echo "<p style='color:red';><b> The new password is the same as the old !</b></p>";
                    
                    }
                    if(isset($_COOKIE['update_password'])) {
                        echo "<p style='color:green';><b> Your password has been properly modified !</br></p>";
                    }
                ?>
            </div>

            <div class="card-edit">
                <h1>EDIT PROFILE</h1><br><br>
                <form method="POST" action="../models/update_password_post.php">
                    <label for="last_password">Type your last password:</label>
                    <input type="password" id="last_password" name="last_password" required placeholder="last password"/><br>
                    <label for="password">New password:</label>
                    <input type="password" id="new_password" name="new_password" required placeholder="New Password"/><br>
                    <input type="submit" value="Change password" />          
                </form>
            </div>
        </section>
        <?php 
            # CLOSING CURLY BRACKET OF ELSE FOR THE COOKIE OF SESSION
            }
        ?>
    </body>
</html>