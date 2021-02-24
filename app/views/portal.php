<!DOCTYPE html>
<html lang="en">
	<head>	
		<link rel="shortcut icon" type="image/png" href="../public/images/favicon.png"/>
		<?php 
		$title ="Bear Gaming | Portal";
        $css = "../public/scss/portal/portal.css";
        $js = "";
		include("./includes/header.php"); 
	    ?>
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
            
        <header>
            <ul>
                <li><a href="./portal.php">HOME</a></li>
                <li><a href="./profile.php">EDIT</a></li>
                <li><a href="./logout.php"><img class="logout" src="../public/images/MultiversePlanetPortal.png" alt="logout"></a><br></li>
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
                             echo('<div class="card card_search"><a href=' . $game_link . '><img class="game" src = '. $game .'></a><br>');
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

        <?php 
            }
            # CLOSING CURLY BRACKET OF ELSE FOR THE COOKIE OF SESSION   
        }
        ?>
    </body>
</html>