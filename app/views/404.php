
	<?php 

		$title ="Bear Gaming | 404";
		$css = "../public/scss/";
		$js = "";
		include("./includes/header.php"); 

	?> 



    <body>
        
            <?php 

                if(!isset($_COOKIES['existing_pseudo'])){
                    header('Refresh: 3; url=index.php');
                }
            
            ?>

    </body>

    <!-- <?php 
		include("./includes/footer.php")
	?> -->
