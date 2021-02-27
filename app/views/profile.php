<!DOCTYPE html>
<html lang="en">
	<head>	
		<link rel="shortcut icon" type="image/png" href="../public/images/favicon.png"/>
		<?php 
		    $title ="Bear Gaming | Profile";
            $css = "../public/scss/profile/profile.css";
            $js = "../controllers/wScratchPad.min.js";
		    include("./includes/header.php"); 
            ?> 
            <!-- <script 
            src="https://code.jquery.com/jquery-2.2.4.min.js" 
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" 
            crossorigin="anonymous">
            </script>
            <script src="../controllers/wScratchPad.min.js"></script> -->
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
                <source src="https://res.cloudinary.com/dav123789/video/upload/v1614441655/Bear_Gaming%20images/video/fairy_forest_gbopgt.mp4"></source>
            </video>
                
            <header>
                <!-- <img class="logo" src="../public/images/favicon.png" alt="logo"> -->
                <ul>
                    <li><a class="portal-a" href="./portal.php" title="Home">HOME</a></li>
                    <li><a class="portal-a" href="./profile.php" title="Profile">PROFILE</a></li>
                    <li><a class="portal-a" href="./logout.php" title="Logout"><img class="logout" src="../public/images/MultiversePlanetPortal.png" alt="logout"></a><br></li>
                </ul>
            </header>
                
            <section>
                <!-- <div class="cadre_info">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span> -->
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
                    echo "<b class='info_profile'>Your pseudo is :</b><span> $pseudo</span>";
                    echo "<br><br><b class='info_profile'> Your email is :</b><span> $email</span>";
                    echo "<br><br><b class='info_profile'> Account created the :</b><span> $date_inscription</span><br><br><br><br>";

                    // PASSWORD ERROR MESSAGE
                    if (isset($_COOKIE['error_password_not_exist'])){
                        echo '<span class="error"><i class="fas fa-exclamation-circle"></i>&nbsp;Old password entered is incorrect.</span><br>';

                    }
                    if(isset($_COOKIE['error_same_password'])){
                        echo '<span class="error"><i class="fas fa-exclamation-circle"></i>&nbsp;The new password is the same as the old !</span><br>';
                    
                    }
                    if(isset($_COOKIE['update_password'])) {
                        echo '<span class="valid"><i class="fas fa-check-circle"></i>&nbsp;Your password has been properly modified !</span><br>';
                    }

                    // PSEUDO ERROR MESSAGE

                    if (isset($_COOKIE['error_pseudo_not_exist'])){
                        echo '<span class="error"><i class="fas fa-exclamation-circle"></i>&nbsp;Old pseudo entered is incorrect.</span><br>';

                    }
                    if(isset($_COOKIE['error_same_pseudo'])){
                        echo '<span class="error"><i class="fas fa-exclamation-circle"></i>&nbsp;The new pseudo is the same as the old !</span><br>';
                    
                    }
                    if(isset($_COOKIE['update_pseudo'])) {
                        echo '<span class="valid"><i class="fas fa-check-circle"></i>&nbsp;Your pseudo has been properly modified !</span><br>';
                    }
                    ?>
                    </div>
                <!-- </div> -->

                <div class="cadre_edit">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <div class=" card-edit">
                    <h1>EDIT PROFILE</h1><br><br>
                    <form method="POST" action="../models/update_pseudo_post.php">
                        <div class="inputBox">
                            <input type="text" id="last_pseudo" name="last_pseudo"  required placeholder="Last Pseudo"/><br><br>
                            <!-- <label for="last_pseudo">Type your last pseudo : </label> -->
                        </div>

                        <div class="inputBox">
                            <input type="text" id="new_pseudo" name="new_pseudo"  required placeholder="New Pseudo"/><br><br>
                            <!-- <label for="new_pseudo">New pseudo : </label> -->
                        </div>

                        <button type="submit" name="submit" >  
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Update pseudo
                        </button>
                    </form>    

                    <br><hr><br>

                    <form method="POST" action="../models/update_password_post.php">
                        <div class="inputBox">
                            <input type="password" id="last_password" name="last_password" required placeholder="Last password"/><br><br>
                            <!-- <label for="last_password">Type your last password : </label> -->
                        </div>

                        <div class="inputBox">
                            <input type="password" id="new_password" name="new_password"  required placeholder="New Password"/><br><br>
                            <!-- <label for="password">New password : </label> -->
                        </div>

                        <button type="submit" name="submit" >                   
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Update password
                        </button><br><br><br>          
                    </form>
                    </div>
                </div>
            </section>
        <?php 
            # CLOSING CURLY BRACKET OF ELSE FOR THE COOKIE OF SESSION
            }
        ?>
    </body>
</html>