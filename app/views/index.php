<!DOCTYPE html>
<html lang="en">
	<head>	
		<link rel="icon" href="../public/images/favicon.ico"/>
		<?php 
			$title ="Bear Gaming | Home";
			$css = "../public/scss/styles.css";
			$js = "";
			include("./includes/header.php"); 
		?> 
	</head>

	

	
	
    <body>
		<header>
			<!-- <img class="logo" src="../public/images/favicon.png" alt="logo"> -->
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
								"https://res.cloudinary.com/dav123789/image/upload/v1614262858/Bear_Gaming%20images/image-head/arcade_home_bg_eeg1xl.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262859/Bear_Gaming%20images/image-head/mario_bg_wpsfdl.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262858/Bear_Gaming%20images/image-head/alienation_ikedyu.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262858/Bear_Gaming%20images/image-head/assassins-creed-origins-pyramid_msgyht.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262858/Bear_Gaming%20images/image-head/assassins-creed-syndicate_a1leke.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262857/Bear_Gaming%20images/image-head/the-witcher_ngusqs.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262858/Bear_Gaming%20images/image-head/battleborn_zrz9ij.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262858/Bear_Gaming%20images/image-head/cyberpunk-2077_ragkjf.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262858/Bear_Gaming%20images/image-head/fifa-17_hilwxb.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262859/Bear_Gaming%20images/image-head/dragon-ball-z-battle-of-z_x97wov.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262856/Bear_Gaming%20images/image-head/the-witcher-3-wild-hunt5_bob5cr.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262858/Bear_Gaming%20images/image-head/far-cry-primal-11_pzisix.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262859/Bear_Gaming%20images/image-head/cyberpunk-2077_2_ylnkvs.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262859/Bear_Gaming%20images/image-head/ghost-recon-wildlands_v7f3mr.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262859/Bear_Gaming%20images/image-head/grand-theft-auto-v-online_amakhh.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262859/Bear_Gaming%20images/image-head/hellblade_vem2dj.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262859/Bear_Gaming%20images/image-head/injustice-2_uvrpdo.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262859/Bear_Gaming%20images/image-head/hitman-agent-47_bb5kww.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262859/Bear_Gaming%20images/image-head/gta-v_zn9esb.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262859/Bear_Gaming%20images/image-head/journey_ypstmz.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262858/Bear_Gaming%20images/image-head/the-witcher-3_uzoakc.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262859/Bear_Gaming%20images/image-head/just-cause-3_haubxx.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262859/Bear_Gaming%20images/image-head/little-nightmares_bxglzc.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262857/Bear_Gaming%20images/image-head/watch-dogs-2_pracnf.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262858/Bear_Gaming%20images/image-head/xcom-2_d7h25o.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262860/Bear_Gaming%20images/image-head/moon_bg_gbpl56.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262856/Bear_Gaming%20images/image-head/the-witcher-3-wild-hunt-3_xkl46c.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262860/Bear_Gaming%20images/image-head/neon_bg_n36unj.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262860/Bear_Gaming%20images/image-head/marvel-spider-man_bg_z9fug8.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262860/Bear_Gaming%20images/image-head/no-mans-sky-02_if6awc.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262860/Bear_Gaming%20images/image-head/overwatch-dva_huagaq.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262856/Bear_Gaming%20images/image-head/ratchet-clank_gjksrt.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262857/Bear_Gaming%20images/image-head/recore_z4obad.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262858/Bear_Gaming%20images/image-head/the-witcher-3-wild-hunt-2_wwg1wd.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262857/Bear_Gaming%20images/image-head/red-dead-redemption-ii_w6c778.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262857/Bear_Gaming%20images/image-head/sherlock-holmes_c8hbnn.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262857/Bear_Gaming%20images/image-head/sonic_bg_a0prdr.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262857/Bear_Gaming%20images/image-head/super-mario-maker_pfstzr.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262857/Bear_Gaming%20images/image-head/tar-wars-battlefront_e7f6ho.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262857/Bear_Gaming%20images/image-head/the-technomancer-zacharia-mancer_tfyrq9.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262858/Bear_Gaming%20images/image-head/the-witcher-3-wild-hunt_t07302.jpg",
								"https://res.cloudinary.com/dav123789/image/upload/v1614262857/Bear_Gaming%20images/image-head/treet-fighter-5_dwol4p.jpg"
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
					<a href="https://www.linkedin.com/in/david-relut-839415202/" target="_blank">
						<i class="fab fa-linkedin"></i>
					</a>
					<a href="https://www.instagram.com/" target="_blank">
						<i class="fab fa-instagram"></i>
					</a><br><br>
					<p class="copyright-p">Copyright &#169; 2021 All Rights Reserved. By Kaito.</p>
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