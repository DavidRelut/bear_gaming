	<!-- <?php 
	
		session_start();

        // include("../database/load_bdd.php");
		// $bdd = connection_mysql();
	
	?> -->
	
	
	<?php 

		$css = "../public/scss/styles.css";
		$title ="Bear Gaming | Login";
		include("../views/includes/header.php"); 

	?> 



	<body>

		<?php 

			# CONNECT TO DATABASE
			include("../database/load_bdd.php");
			$bdd = connection_mysql();

			# RESET COOKIES
			include("../controllers/remove_cookies.php");
			remove_cookies();

			# DECLARE VARIABLE FOR POST OF FORM
			$pseudo = htmlspecialchars($_POST['pseudo']);
			$password = htmlspecialchars($_POST['password']);

			# CHECK IF PSEUDO EXIST
			$req = $bdd->prepare('SELECT count(pseudo) AS pseudo_ok FROM users WHERE pseudo = :pseudo');
			$req->execute(['pseudo'=> $pseudo]);
			$res = $req->fetch();

			$pseudo_ok = $res['pseudo_ok'];

			# ERROR: BAD PSEUDO !
			if ($pseudo_ok == 0){
				setcookie('error_not_existing_pseudo', true, time() + 3, '/');
				header("Location: ../views/index.php");
				// echo 'Any account is associated with this pseudo';
			} 
			else {
				
				# CHECK PASSWORD WELL ASSOCIATED WITH PSEUDO
				$req_password = $bdd->prepare('SELECT password FROM users WHERE pseudo=:pseudo');
				$req_password->execute(['pseudo'=> $pseudo]);
				$res = $req_password->fetch();
				$password_bdd = $res['password'];
				
				# ERROR: BAD PASSWORD !
				if(!password_verify($password, $password_bdd))
				{
					setcookie('error_bad_password', true, time() + 3, '/');
					header('Location: ../views/index.php');
				}
				
				# GOOD PASSWORD
				else 
				{
					# STORE COOKIE OF THE PLAYER !! DON'T WORK !!
					// $_COOKIE['existing_pseudo'] = true;

					# REDIRECT TO PLAYGROUND PAGE
					header("location: ../views/portal.php");
				}
			}
			

		?>

	</body>