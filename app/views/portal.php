	<?php 

		$title ="Bear Gaming | Portal";
        $css = "../public/scss/portal/portal.css";
        $js = "";
		include("./includes/header.php"); 

	?> 
    <head>
        <link rel="shortcut icon" type="image/png" href="../../public/images/favicon.png"/>
    </head>

        <?php 

            if (!isset($_COOKIE['existing_email'])){
                header('refresh:3; url=index.php');
            }
            else {
                $pseudo=$_COOKIE['existing_pseudo'];
                echo "You're logged in as $pseudo";
        ?> 

        <body>
                
            <!-- <img src="../public/images/pixelday2021-sorapoi-size.png"> -->

            <header>
                <ul>
                    <li><a href="./playground.php">PLAYGROUND</a></li>
                    <li><a href="./profile.php">EDIT</a></li>
                    <li><a href="./logout.php">LOGOUT</a><br></li>
                </ul>
                <!-- <a href="./playground.php">PLAYGROUND</a>
                <a href="./profile.php">EDIT</a>
                <a href="./logout.php">LOGOUT</a><br> -->
            </header>
            <form>
                <input type="search" value="SEARCH" size=50></input>
            </form>
            
            <!-- <form method="POST" action="portal.php">
                <input type="text" name="search_text" placeholder="Search a Game">
                <input type="submit" value="Search" name="search_products">
            </form>

            <?php 
                
                # CONNECT TO DATABASE
		        // include("../database/load_bdd.php");
		        // $bdd = connection_mysql();

                # SI UNE RECHERCHE DE JEU A ETE EFFECTUE CLICK SUR SEARCH
                // if(isset($_POST['search_products'])){
                //     $search_text = $_POST ['search_text'];
                //     echo $search_text;

                //     # SEARCH IN DB LE JEU ASSOCIER A LA SEARCH
                //     $req = $bdd->prepare('SELECT game, game_link, name, description FROM images WHERE name=:search_text').
                //     $req->execute(['search_text'=>$search_text]);
                // }
            ?> -->

            <main>
                <div class="container">

                    <?php 

                    # CONNECT TO DATABASE
		            include("../database/load_bdd.php");
		            $bdd = connection_mysql();
                    
                    $req = $bdd->query("SELECT game, game_link, name, description FROM images LIMIT 10");
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
            </main>   

            <?php 
                # CLOSING CURLY BRACKET OF ELSE FOR THE COOKIE OF SESSION   
            }
            ?>

        </body>

