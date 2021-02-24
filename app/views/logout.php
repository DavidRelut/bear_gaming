<!DOCTYPE html>
<html lang="en">
    <head>
		<link rel="shortcut icon" type="image/png" href="../public/images/favicon.png"/>
		<?php 
			$title ="Bear Gaming | Logout";
			$css = "../public/scss/logout/logout.css";
			$js = "";
			include("./includes/header.php"); 
		?> 
    </head>	

    <body>
        <?php 
        
			include("../controllers/remove_cookies.php");
			remove_cookies();

			header("refresh: 5; url=index.php");
        
        ?>
		<!-- <div class="box">
			<div class="lightbar"></div>
			<div class="topLayer"></div> -->
			<p>SEE YOU SOON !!</p>
			<!-- IT'S NOT A GOODBYE BUT A  -->
		<!-- </div> -->

		<video autoplay muted loop>
			<source src="../public/videos/arcade_night.mp4"></source>
		</video>
    </body>
</html>