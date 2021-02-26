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
            if (!isset($_COOKIE['existing_email'])){
                header('refresh:3; url=index.php');
            }
            else {
                $email = $_COOKIE['existing_email'];
                // echo "You're logged in as $email";
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

                    #QUERY TO RETRIEVE PROFILE INFORMATION
                    $query = $bdd->prepare("SELECT pseudo, date_inscription FROM users WHERE email=:email");
                    $query->execute(['email'=>$email]);
                    $res = $query->fetch();
                    $pseudo = $res['pseudo'];
                    $date_inscription = $res['date_inscription'];

                    # PRINT PROFILE INFORMATION
                    echo "<b>Your pseudo is :</b><span> $pseudo</span>";
                    echo "<br><br><b> Your email is :</b><span> $email</span>";
                    echo "<br><br><b> Account created the :</b><span> $date_inscription</span><br><br><br><br>";

                    // PASSWORD ERROR MESSAGE
                    if (isset($_COOKIE['error_password_not_exist'])){
                        echo "<p style='color:red';><b> Old password entered is incorrect.</br></p>";

                    }
                    if(isset($_COOKIE['error_same_password'])){
                        echo "<p style='color:red';><b> The new password is the same as the old !</b></p>";
                    
                    }
                    if(isset($_COOKIE['update_password'])) {
                        echo "<p style='color:green';><b> Your password has been properly modified !</br></p>";
                    }

                    // PSEUDO ERROR MESSAGE

                    if (isset($_COOKIE['error_pseudo_not_exist'])){
                        echo "<p style='color:red';><b> Old pseudo entered is incorrect.</br></p>";

                    }
                    if(isset($_COOKIE['error_same_pseudo'])){
                        echo "<p style='color:red';><b> The new pseudo is the same as the old !</b></p>";
                    
                    }
                    if(isset($_COOKIE['update_pseudo'])) {
                        echo "<p style='color:green';><b> Your pseudo has been properly modified !</br></p>";
                    }
                ?>
            </div>

            <div class="card-edit">
                <h1>EDIT PROFILE</h1><br><br>
                <?php
                    $email = $_COOKIE['existing_email'];
                
                    #QUERY TO RETRIEVE PROFILE INFORMATION
                    $query = $bdd->prepare("SELECT photo_profile FROM users WHERE email=:email");
                    $query->execute(['email'=>$email]);
                    $res = $query->fetch();
                    $photo_profile = $res['photo_profile'];

                    # PRINT PROFILE INFORMATION
                    echo "<a href='../views/portal.php'><img class='game' src = '. $photo_profile .'></a><br><br>";
                ?>

                <form method="POST" action="../models/update_pseudo_post.php">
                    <label for="last_pseudo">Type your last pseudo : </label>
                    <input type="text" id="last_pseudo" name="last_pseudo"  required placeholder="Last Pseudo"/><br>

                    <label for="new_pseudo">New pseudo : </label>
                    <input type="text" id="new_pseudo" name="new_pseudo"  required placeholder="New Pseudo"/><br>
                    
                    <input type="submit" value="Update pseudo" />
                </form>    

                    <hr></hr><br>

                <form method="POST" action="../models/update_password_post.php">
                    <label for="last_password">Type your last password : </label>
                    <input type="password" id="last_password" name="last_password" required placeholder="Last password"/><br>

                    <label for="password">New password : </label>
                    <input type="password" id="new_password" name="new_password"  required placeholder="New Password"/><br>

                    <input type="submit" value="Update password" />          
                </form>
            </div>
        </section>
        <?php 
            # CLOSING CURLY BRACKET OF ELSE FOR THE COOKIE OF SESSION
            }
        ?>
    </body>
</html>