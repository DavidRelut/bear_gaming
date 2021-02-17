	<!-- <?php 
	
		session_start();
		session_destroy();
		
	?> -->
	
	<?php 

		$title ="Bear Gaming | 404";
		$css = "../public/scss/";
		$js = "";
		include("./includes/header.php"); 

	?> 

    <body>
        <?php 
        
			include("../controllers/remove_cookies.php");
			remove_cookies();

			header("refresh: 3; url=index.php");
        
        ?>
    </body>