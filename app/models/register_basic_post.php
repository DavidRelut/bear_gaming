
	<?php 

		$title ="Bear Gaming";
		$css = "";
		$js = "";
		include("../views/includes/header.php"); 

	?> 


	<?php	

		# CONNECT TO DATABASE
		include("../database/load_bdd.php");
		$bdd = connection_mysql();

		# RESET COOKIES
		include("../controllers/remove_cookies.php");
		remove_cookies();

		# RETRIEVING THE VALUES OF THE FIELDS OF THE POST METHOD
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$email = htmlspecialchars($_POST['email']);
		$firstname = htmlspecialchars($_POST['firstname']);
		$lastname = htmlspecialchars($_POST['lastname']);
		$password = htmlspecialchars($_POST['password']);

		
		# QUERY FOR CHECK IF EMAIL NOT EXISTING
		$query = $bdd->prepare('SELECT count(email) AS nb_email FROM users WHERE email=:email');
		$query->execute(['email'=>$email]);
		$res = $query->fetch();
		
		$nb_email = $res['nb_email'];
		
		# ERROR: EXISTING EMAIL !
		if($nb_email != 0){
			setcookie('error_register_existing_email', true, time() + 3, '/');
			header("Location: ../views/register_basic_theme.php");
		}
		else {
			
			# HASH PASSWORD
			$hash_password = password_hash($password, PASSWORD_DEFAULT);
			
			# QUERY FOR ADD USER TO DATABASE
			$req = $bdd->prepare('INSERT INTO users (pseudo, email, firstname, lastname, password) VALUES (:pseudo, :email, :firstname, :lastname, :password)');
			$req->execute(['pseudo'=> $pseudo, 'email'=> $email, 'firstname'=> $firstname, 'lastname'=> $lastname, 'password'=> $hash_password]);	
			
			echo 'Execution ok création du compte de ' . $pseudo;	
			header('location: ../views/login_basic_theme.php');

		}

	?>
