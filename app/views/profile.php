	<?php 

		$title ="Bear Gaming | Profile";
        $css = "../public/scss/portal/portal.css";
        $js = "";
		include("./includes/header.php"); 

	?> 
    

        <body>

            <?php 

                if (!isset($_COOKIE['existing_pseudo'])){
                    header('refresh:3; url=index.php');
                }
                else {
                    $pseudo = $_COOKIE['existing_pseudo'];
                     header('Location: profile.php');

            ?> 
        

            <!-- <img src="../public/images/pixelday2021-sorapoi-size.png"></img> -->

            <a href="./logout.php">LOGOUT</a>

            <form>

                Changer de mot de passe ?

                Tapez votre mot de passe : <input type="text" name="last_password" required></input>

                Nouveau mot de passe : <input type="password" name="new_password" required></input>

                <button type="submit" value="Change password"></button>
            
            </form>


            <?php 
                # CLOSING CURLY BRACKET OF ELSE FOR THE COOKIE OF SESSION
                }
            ?>

        </body>

    <!-- <?php 
		include("./includes/footer.php")
	?> -->