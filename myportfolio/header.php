<!doctype html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<title>My Portfolio</title>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/../../../wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/../../../wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
	<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/dist/main.js?ver=20220302'></script>
	<script src="https://kit.fontawesome.com/f52672158f.js" crossorigin="anonymous"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-222701322-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-222701322-1');
	</script>
	<?php wp_enqueue_script('jquery'); ?>
	<?php wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery')); ?>
	<?php wp_head(); ?>
</head>

<body>
	<header id="navigation">
		<div class="navigation">
			<span class="left-nav"><a href="<?php echo get_home_url() ?>">Kazuki PORTFOLIO</a></span>


			<button type="button" class="btn js-btn">
				<span class="btn-line"></span>
			</button>

			<nav id="nav">
				<ul class="right-nav">
					<li class="nav-list"><a href="<?php echo get_home_url() ?>">HOME</a></li>
					<li class="nav-list"><a href="<?php get_site_url() ?>/wp/works">WORKS</a></li>
					<li class="nav-list"><a href="<?php get_site_url() ?>/wp/about">ABOUT</a></li>
					<li class="nav-list"><a href="#">SKILL</a></li>
					<li class="nav-list"><a href="<?php get_home_url() ?>/wp/#service">SERVICE</a></li>
					<li class="nav-list"><a href="<?php get_site_url() ?>/wp/contact">CONTACT</a></li>
				</ul>
			</nav>

		</div>
	</header>