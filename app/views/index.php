<!DOCTYPE html>
<html lang="en">
	<head>	
		<link rel="shortcut icon" type="image/png" href="../public/images/favicon.png"/>
		<?php 
			$title ="Bear Gaming | Home";
			$css = "../public/scss/styles.css";
			$js = "";
			include("./includes/header.php"); 
		?> 
	</head>

	

	
	
    <body>
		<header>
			<img class="logo" src="../public/images/favicon.png" alt="logo">
			<div class="box">
				<div class="lightbar"></div>
				<div class="topLayer"></div>
				<p class="neon" href="./login.php">WELCOME TO BEAR GAMING !</p>
			</div>
		</header>
		<div class="parallax">
    		<div class="parallax__layer parallax__layer__0">
    		    <img src="https://github.com/samdbeckham/blog/blob/master/dev/_assets/images/articles/firewatch/layer_0.png?raw=true" />
    		</div>
    		<div class="parallax__layer parallax__layer__1">
    		    <img src="https://github.com/samdbeckham/blog/blob/master/dev/_assets/images/articles/firewatch/layer_1.png?raw=true" />
    		</div>
    		<div class="parallax__layer parallax__layer__2">
    		    <img src="https://github.com/samdbeckham/blog/blob/master/dev/_assets/images/articles/firewatch/layer_2.png?raw=true" />
    		</div>
    		<div class="parallax__layer parallax__layer__3">
				<img src="https://github.com/samdbeckham/blog/blob/master/dev/_assets/images/articles/firewatch/layer_3.png?raw=true" />
    		</div>
    		<div class="parallax__layer parallax__layer__4">
				<img src="https://github.com/samdbeckham/blog/blob/master/dev/_assets/images/articles/firewatch/layer_4.png?raw=true" />
    		</div>
    		<div class="parallax__layer parallax__layer__5">
    		    <img src="https://github.com/samdbeckham/blog/blob/master/dev/_assets/images/articles/firewatch/layer_5.png?raw=true" />
    		</div>
    		<div class="parallax__layer parallax__layer__6">
    		    <img src="https://github.com/samdbeckham/blog/blob/master/dev/_assets/images/articles/firewatch/layer_6.png?raw=true" />
    		</div>
    		<div class="parallax__cover">
				<section>
					<div id="image-head" class="image-head">
						<script>
							var images = [
								"../public/images/image-head/arcade_home_bg.jpg",
								"../public/images/image-head/mario_bg.jpg",
								"../public/images/image-head/alienation.jpg",
								"../public/images/image-head/assassins-creed-origins-pyramid.jpg",
								"../public/images/image-head/assassins-creed-syndicate.jpg",
								"../public/images/image-head/the-witcher.jpg",
								"../public/images/image-head/battleborn.jpg",
								"../public/images/image-head/cyberpunk-2077.jpg",
								"../public/images/image-head/fifa-17.jpg",
								"../public/images/image-head/dragon-ball-z-battle-of-z.jpg",
								"../public/images/image-head/the-witcher-3-wild-hunt5.jpg",
								"../public/images/image-head/far-cry-primal-11.jpg",
								"../public/images/image-head/cyberpunk-2077_2.jpg",
								"../public/images/image-head/ghost-recon-wildlands.jpg",
								"../public/images/image-head/grand-theft-auto-v-online.jpg",
								"../public/images/image-head/hellblade.jpg",
								"../public/images/image-head/injustice-2.jpg",
								"../public/images/image-head/hitman-agent-47.jpg",
								"../public/images/image-head/gta-v.jpg",
								"../public/images/image-head/journey.jpg",
								"../public/images/image-head/the-witcher-3.jpg",
								"../public/images/image-head/just-cause-3.jpg",
								"../public/images/image-head/little-nightmares.jpg",
								"../public/images/image-head/mario_bg.jpg",
								"../public/images/image-head/moon_bg.jpg",
								"../public/images/image-head/the-witcher-3-wild-hunt-3.jpg",
								"../public/images/image-head/neon_bg.jpg",
								"../public/images/image-head/marvel-spider-man_bg.jpg",
								"../public/images/image-head/no-mans-sky-02.jpg",
								"../public/images/image-head/overwatch-dva.jpg",
								"../public/images/image-head/ratchet-clank.jpg",
								"../public/images/image-head/recore.jpg",
								"../public/images/image-head/the-witcher-3-wild-hunt-2.jpg",
								"../public/images/image-head/red-dead-redemption-ii.jpg",
								"../public/images/image-head/sherlock-holmes.jpg",
								"../public/images/image-head/sonic_bg.jpg",
								"../public/images/image-head/super-mario-maker.jpg",
								"../public/images/image-head/tar-wars-battlefront.jpg",
								"../public/images/image-head/the-technomancer-zacharia-mancer.jpg",
								"../public/images/image-head/the-witcher-3-wild-hunt.jpg"
							]
							
							var imageHead = document.getElementById("image-head");
							
							var i = 0;
							
							setInterval(() => {
								imageHead.style.backgroundImage = "url(" + images[i] + ")";
								i = i + 1;
								if(i == images.length){
									i = 0;
								}
								console.log(imageHead);
							}, 3000);
						</script>
					</div>
					<div class="about-us">
						<h1>THE NUMBER ONE FOR THE NEW TOP GAMES</h1><br>
						<p class="about_description">
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat exercitationem sequi quod, aspernatur corporis
							fugit numquam fugiat asperiores minus fuga minima, veritatis natus, deleniti quia omnis soluta eius excepturi culpa!
						</p><br><br>
						<div class=body_button>
							<div class="center">
								<div class="outer button">
									<a class="rainbow-button" href="../views/login.php">START</a>
									<span></span>
									<span></span>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="footer__item footer__social-networks">
					<a href="https://github.com/DavidRelut" target="_blank">
						<i class="fab fa-github"></i>
					</a>
					<a href="https://dribbble.com/DavidR123" target="_blank">
						<i class="fab fa-dribbble"></i>
					</a>
					<a href="https://www.instagram.com/" target="_blank">
						<i class="fab fa-instagram"></i>
					</a><br><br>
					<p class="copyright-p">Copyright &#169; 2021 All Rights Reserved. By Bear Gaming.</p>
				</div>
			</div> 
		</div>
		
<!-- 
		<div class="footer__item footer__social-networks">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
		 -->
    </body>
</html>