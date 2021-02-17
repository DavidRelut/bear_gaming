<!DOCTYPE html>
<html lang="en">

    <body>
	
		<?php 
		
			function remove_cookies(){
				foreach ($_COOKIE as $key => $value){
					setcookie($key, '', time() - 1, '/');
				}
			}
		
		?>
		
    </body>
</html>
