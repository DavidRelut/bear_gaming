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
					# RETRIEVE NAME ASSOCIATED WITH THE FORM EMAIL
					$query = $bdd->prepare("SELECT pseudo FROM users WHERE email=:email");
					$query->execute(['email'=>$email]);

					$res = $query->fetch();
					$pseudo_cookie = $res['pseudo'];

					# CREATE COOKIE USER SESSION
					setcookie("existing_pseudo_cookie", $pseudo_cookie, time() + 10000, '/');
					setcookie("existing_pseudo", $pseudo, time() +3000, '/');

					# REDIRECT TO PLAYGROUND PAGE
					header("location: ../views/portal.php");
				}
			}
			

		?>

	</body>