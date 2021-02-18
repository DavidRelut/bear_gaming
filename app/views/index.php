
	<?php 

		$title ="Bear Gaming | Login";
		$css = "../public/scss/styles.css";
		$js = "";
		include("./includes/header.php"); 

	?> 

	<?php 

		#ERROR MESSAGE FOR PSEUDO AND PASSWORD
		if(isset($_COOKIE['error_not_existing_email'])) {
			echo 'Email or Password incorrect';
		}	
		
		if(isset($_COOKIE['error_bad_password'])) {
			echo 'Email or Password incorrect';
		}
		
		
	?>

	<form method="POST" action="../models/login_post.php">
		<input type="email" name="email" placeholder= "Enter email" required><br><br>
		<input type="password" name="password" placeholder= "Enter password" required><br><br>
		<button type="submit" name="submit">LOGIN</button>
	</form>

	<a href="../views/register.php">You have any account register here !</a>
	
	<!-- <?php 
		include("./includes/footer.php")
	?> -->