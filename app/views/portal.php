	<?php 

		$title ="Bear Gaming | Portal";
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
                    $pseudo=$_COOKIE['existing_pseudo'];
                    echo"vous etes connecter en tant que $pseudo";

                    header('Location: portal.php');

            ?> 

            <img src="../public/images/pixelday2021-sorapoi-size.png"></img>
             <main>
                <a href="./logout.php">LOGOUT</a>
                <a href="./profile.php">EDIT</a>
                <a href="./playground.php">PLAYGROUND</a>
                <input type="search" value="SEARCH"></input>
            </main>

            <?php 
                # CLOSING CURLY BRACKET OF ELSE FOR THE COOKIE OF SESSION   
                }
            ?>
        </body>

