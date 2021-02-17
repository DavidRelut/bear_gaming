
	<?php 

		$title ="Bear Gaming | Register";
		$css = "../public/scss/register/register.css";
		$js = "";
		include("./includes/header.php"); 

		?> 
		

	<body>

		<p class="register_email-existing">
			<?php 
				if(isset($_COOKIE['error_register_existing_email'])){
					echo "Already existing email or pseudo";
				}
			
			?>
		</p>
		
		<form method="POST" action="../models/register_post.php">
			<input type="text" name="pseudo" placeholder= "Enter pseudo" required><br><br>
			<input type="email" name="email" placeholder= "Enter email" required><br><br>
			<input type="text" name="firstname" placeholder= "Enter First name" required><br><br>
			<input type="text" name="lastname" placeholder= "Enter Last name" required><br><br>
			<input type="password" name="password" placeholder= "Enter password" required><br><br>
			<button type="submit" name="submit">REGISTER</button>
		</form>

		<a href="../views/index.php">Back to Login !</a>

	
	</body>
	
	<!-- <?php 
		include("./includes/footer.php")
	?> -->