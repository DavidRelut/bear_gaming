<!DOCTYPE html>
<html lang="en">
    <head>
		<link rel="shortcut icon" type="image/png" href="../public/images/favicon.png"/>
		
		<?php 
			$title ="Bear Gaming | Login";
			$css = "../public/scss/login/login.css";
			$js = "";
			include("./includes/header.php"); 
		?> 
    </head>
		
	<body>

		<?php 
			#ERROR MESSAGE FOR PSEUDO AND PASSWORD
			if(isset($_COOKIE['error_not_existing_email'])) {
				echo 'Email or Password incorrect';
			}	

			if(isset($_COOKIE['error_bad_password'])) {
				echo 'Email or Password incorrect';
			}
		?>

		<section>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
			<div class="row">
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
				<div>
					<i class="fab fa-phoenix-framework"></i>
					<i class="fas fa-jedi"></i>
					<i class="fab fa-wizards-of-the-coast"></i>
					<i class="fab fa-xbox"></i>
					<i class="fab fa-galactic-senate"></i>
					<i class="fab fa-penny-arcade"></i>
					<i class="fas fa-gamepad"></i>
					<i class="fas fa-hood-cloak"></i>
					<i class="fas fa-dice-d6"></i>
					<i class="fab fa-playstation"></i>
					<i class="fas fa-dice-d20"></i>
					<i class="fas fa-trophy"></i>
					<i class="fab fa-d-and-d"></i>
					<i class="fas fa-dungeon"></i>
					<i class="fab fa-twitch"></i>
					<i class="fab fa-steam-symbol"></i>
					<i class="fas fa-headset"></i>
					<i class="fas fa-meteor"></i>
					<i class="fas fa-hat-wizard"></i>
					<i class="fab fa-mandalorian"></i>
					<i class="fab fa-fort-awesome"></i>
				</div>
			</div>
		</section>
		
		<form method="POST" action="../models/login_post.php">
			<input type="email" name="email" placeholder= "Enter email" required><br><br>
			<input type="password" name="password" placeholder= "Enter password" required><br><br>
			<button type="submit" name="submit">LOGIN</button><br><br>
			<a href="../views/register.php">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			You have any account register here !</a>
		</form>
	

	</body>
</html>