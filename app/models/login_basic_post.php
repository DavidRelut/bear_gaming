	<?php 

		$css = "../public/scss/styles.css";
		$title ="Bear Gaming";
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
			$email = htmlspecialchars($_POST['email']);
			$password = htmlspecialchars($_POST['password']);

			# CHECK IF EMAIL EXIST
			$req = $bdd->prepare('SELECT count(email) AS email_ok FROM users WHERE email = :email');
			$req->execute(['email'=> $email]);
			$res = $req->fetch();

			$email_ok = $res['email_ok'];

			# ERROR: BAD EMAIL !
			if ($email_ok == 0){
				setcookie('error_not_existing_email', true, time() + 3, '/');
				header("Location: ../views/login_basic_theme.php");
				// echo 'Any account is associated with this email';
			} 
			else {
				
				# CHECK PASSWORD WELL ASSOCIATED WITH EMAIL
				$req_password = $bdd->prepare('SELECT password FROM users WHERE email=:email');
				$req_password->execute(['email'=> $email]);
				$res = $req_password->fetch();
				$password_bdd = $res['password'];
				
				# ERROR: BAD PASSWORD !
				if(!password_verify($password, $password_bdd))
				{
					setcookie('error_bad_password', true, time() + 3, '/');
					header('Location: ../views/login_basic_theme.php');
				}
				
				# GOOD PASSWORD
				else 
				{
					# RETRIEVE PSEUDO ASSOCIATED WITH THE FORM EMAIL
					$query = $bdd->prepare("SELECT email FROM users WHERE email=:email");
					$query->execute(['email'=>$email]);
					$res = $query->fetch();
					$pseudo_cookie = $res['pseudo'];
					$email_cookie = $res['email'];

					# CREATE COOKIE USER SESSION
					setcookie("existing_pseudo", $pseudo_cookie, time() + 48200, '/');
					setcookie("existing_email", $email_cookie, time() + 48200, '/');

					# REDIRECT TO PLAYGROUND PAGE
					header("location: ../views/portal.php");
				}
			}
			

		?>

	</body>