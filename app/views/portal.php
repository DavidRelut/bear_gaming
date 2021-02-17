	<!-- <?php 
	
		// session_start();

        // include("../database/load_bdd.php");
		// $bdd = connection_mysql();
	
	?> -->

	<?php 

		$title ="Bear Gaming | Portal";
        $css = "../public/scss/portal/portal.css";
        $js = "";
		include("./includes/header.php"); 

	?> 

        <body>

            <!-- <?php 

                if(!isset($_SESSION('existing_pseudo')){
                    header('Location: 404.php');
                }

            ?>  -->

  
            <img src="../public/images/pixelday2021-sorapoi-size.png"></img>

            <a href="./logout.php">LOGOUT</a>

            
            <a href="./profile.php">EDIT</a>

            <input type="search"></input>

        </body>

    <!-- <?php 
		include("./includes/footer.php")
	?> -->