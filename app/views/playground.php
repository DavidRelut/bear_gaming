	    <?php 

	    	$title ="Bear Gaming | Playground";
            $css = "../public/scss/playground/playground.css";
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
                     header('Location: playground.php');

            ?> 

            <img src="../public/images/pixelday2021-sorapoi-size.png"></img>
            
            <a href="./logout.php">LOGOUT</a>
            <a href="./profile.php">EDIT</a>
            <a href="./portal.php">PORTAL</a>

            <?php 
                # CLOSING CURLY BRACKET OF ELSE FOR THE COOKIE OF SESSION
                }
            ?>

        </body>

        <!-- <?php 
	    	include("./includes/footer.php")
	    ?> -->
