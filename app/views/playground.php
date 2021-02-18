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
            ?> 

            <img src="../public/images/pixelday2021-sorapoi-size.png"></img>
            
            <a href="./logout.php">LOGOUT</a>
            <a href="./profile.php">EDIT</a>
            <a href="./portal.php">PORTAL</a>

            
            <div class="container">
                
                <?php 

                    # CONNECT TO DATABASE
		            include("../database/load_bdd.php");
		            $bdd = connection_mysql();

                    $req = $bdd->query("SELECT game, game_link, name, description FROM images");
                    while($res = $req->fetch()){
                        $game_link = $res['game_link'];
                        $game = $res['game'];
                        $name = $res['name'];
                        $description = $res['description'];
                        
                        # LOAD INFORMATION GAME
                        echo('<div class="card"><a href=' . $game_link . '><img class="game" src = '. $game .'></a><br>');
                        echo('<p class="game_name">' . $name . '</p><br>');
                        echo('<p class="game_description">' . $description . '</p><br><hr></div>');
                    }
                ?>

            </div>

            <?php 
                # CLOSING CURLY BRACKET OF ELSE FOR THE COOKIE OF SESSION
                }
            ?>

        </body>

        <!-- <?php 
	    	include("./includes/footer.php")
	    ?> -->
