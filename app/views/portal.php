<!DOCTYPE html>
<html lang="en">
	<head>	
		<link rel="shortcut icon" type="image/png" href="../public/images/favicon.png"/>
		<?php 
		$title ="Bear Gaming | Portal";
        $css = "../public/scss/portal/portal.css";
        $js = "../controllers/script.js";
		include("./includes/header.php"); 
	    ?>
	</head>

    <?php 

        if (!isset($_COOKIE['existing_email'])){
            header('refresh:3; url=index.php');
        }
        else {
            $pseudo=$_COOKIE['existing_email'];
            // echo "You're logged in as $pseudo";
    ?> 

    <body>
            
        <header>
            <img class="logo" src="../public/images/favicon.png" alt="logo">
            <ul>
                <li><a class="portal-a" href="./portal.php" title="Home">HOME</a></li>
                <li><a class="portal-a" href="./profile.php" title="Profile">PROFILE</a></li>
                <li><a class="portal-a" href="./logout.php" title="Logout"><img class="logout" src="../public/images/MultiversePlanetPortal.png" alt="logout"></a><br></li>
            </ul>
        </header>
        
        <form method="POST" action="portal.php">
            <input type="text" name="search_text" placeholder="Search a Game" size=37>
            <input type="submit" value="Search" name="search_products">
        </form>

        <main>
            <div class="container">

                <?php 

                     # CONNECT TO DATABASE
                     include("../database/load_bdd.php");
                     $bdd = connection_mysql();

                     # IF A GAME SEARCH WAS PERFORMED WITH CLICK ON SEARCH
                     if(isset($_POST['search_products'])){
                         $search_text = $_POST['search_text'];
                         $search_text = '%' . $search_text . '%';

                         # SEARCH IN DB FOR THE ASSOCIATED GAME
                         $req = $bdd->prepare('SELECT game, game_link, name, description FROM images WHERE name LIKE :search_text');
                         $req->execute(['search_text'=>$search_text]);
                         while($res = $req->fetch()){
                             $game = $res['game'];
                             $game_link = $res['game_link'];
                             $name = $res['name'];
                             $description = $res['description'];

                             # LOAD GAME SEARCH INFORMATION
                             echo('<div class="card"><a href=' . $game_link . '><img class="game" src = '. $game .'></a><br>');
                             echo('<p class="game_name">' . $name . '</p><br>');
                             echo('<p class="game_description">' . $description . '</p><br><hr></div>');
                         }
                     }
                     else {

                ?>

                <?php 

                    $req = $bdd->query("SELECT game, game_link, name, description FROM images LIMIT 10");
                    while($res = $req->fetch()){
                        $game = $res['game'];
                        $game_link = $res['game_link'];
                        $name = $res['name'];
                        $description = $res['description'];
                    
                    # LOAD INFORMATION GAME
                    echo('<div class="card"><a href=' . $game_link . ' target="_blank"><img class="game" src = '. $game .'></a><br>');
                    echo('<p class="game_name">' . $name . '</p><br>');
                    echo('<p class="game_description">' . $description . '</p><br><hr></div>');
                    }
                ?>

            </div>
        </main>   
        <script type="text/javascript" src="vanilla-tilt.js"></script>
		<script type="text/javascript">
			VanillaTilt.init(document.querySelectorAll(".card"), {
				max: 25,
				speed: 400,
				// glare: true,
				// "max-glare": 2,
			});
		
		</script>

        <?php 
            }
            # CLOSING CURLY BRACKET OF ELSE FOR THE COOKIE OF SESSION   
        }
        ?>
    </body>
</html>