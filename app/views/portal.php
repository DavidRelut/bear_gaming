	<?php 

		$title ="Bear Gaming | Portal";
        $css = "../public/scss/portal/portal.css";
        $js = "";
		include("./includes/header.php"); 

	?> 

        <body>

            <?php 

                if (!isset($_COOKIE['existing_email'])){
                    header('refresh:3; url=index.php');
                }
                else {
                    $pseudo=$_COOKIE['existing_pseudo'];
                    echo "You're logged in as $pseudo";
            ?> 
    

            <!-- <img src="../public/images/pixelday2021-sorapoi-size.png"> -->
                <header>
                    <a href="./logout.php">LOGOUT</a>
                    <a href="./profile.php">EDIT</a>
                    <a href="./playground.php">PLAYGROUND</a>
                    <input type="search" value="SEARCH"></input>
                </header>

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

