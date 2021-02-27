<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); $template_uri = get_template_directory_uri();?>
	<title>AMGE Lyon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=210598607122738&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</head>
<body <?php body_class(); ?> >
	<section id="first">
		<nav id="nav" class="navbar navbar-expand-md navbar-light">
		    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		        <span class="navbar-toggler-icon"></span>
		    </button>

		    <div class="collapse navbar-collapse" id="navbarCollapse">
		        <div id="div_nav" class="navbar-nav">
		            <a href="<?php echo get_home_url(); ?>" class="animate nav-item nav-link actived"><?php the_field("facebook_text",156); ?> ACCUEIL</a>
		            <a href="<?php echo get_home_url(); ?>#us" class="animate nav-item nav-link">QUI SOMMES NOUS ?</a>
		            <a href="<?php echo get_home_url(); ?>#event" class="animate nav-item nav-link">EVENEMENTS</a>
		            <a href="<?php echo get_home_url(); ?>#team" class="animate nav-item nav-link">NOTRE EQUIPE</a>
		            <a href="<?php echo get_home_url(); ?>#contact" class="animate nav-item nav-link">CONTACT</a>
		        </div>
		    </div>
		</nav>
		<!-- Slideshow container -->
		<div class="slideshow-container">
		<!-- Full-width images with number and caption text -->
			<div id="logoContainer">
				<div id="logo">
					<img src="<?php echo $template_uri; ?>/images/logo.png">
				</div>
				<div id="welcome" data-aos="fade-up">
					BIENVENUE
				</div>
				<div id="design">
					<img src="<?php echo $template_uri; ?>/images/design.png">
				</div>
				<div id="welcome_text" data-aos="fade-up">
					Au site officiel de l'AMGE LYON!
				</div>
				<div id="btn">
					<button onclick="location.href = '<?php echo get_home_url(); ?>#rejoindre';" id="leftbtn" class="btn btn-lg">Nous rejoindre</button>
					<button onclick="location.href = '<?php echo get_home_url(); ?>#contact';" id="rightbtn" class="btn btn-lg">Contact</button>
				</div>
			</div>
			<div class="mySlides fadee image">
				<img src="<?php echo $template_uri; ?>/images/background.jpg" style="width:100%">
			</div>
			<!--
			<div class="mySlides fadee">
				<img src="img2.jpg" style="width:100%">
			</div>

			<div class="mySlides fadee">
				<img src="img3.jpg" style="width:100%">
			</div>
			-->

			<!-- Next and previous buttons -->
			<a class="prev" onclick="plusSlides(-1)">&#10095;</a>
			<a class="next" onclick="plusSlides(1)">&#10094;</a>
			
			<div id="triangle-bottomright"></div>
			<div id="triangle-bottomleft"></div>
			<div id="down-btn">
				<a href="#second"><img src="<?php echo $template_uri; ?>/images/down.png"></a>
			</div>
		</div>

	</section>
