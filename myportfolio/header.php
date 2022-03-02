<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<title>My Portfolio</title>
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <?php wp_enqueue_script('jquery'); ?>
  <?php wp_enqueue_script('bootstrap-js','https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',array('jquery')); ?>  
	<?php wp_head(); ?>
</head>

<body>
	<header id="nav">
        <div class="wrap">
			<span class="left-nav"><a href="#">Kazuki PORTFOLIO</a></span>
			<nav>
				<ul class="right-nav">
					<li><a href="#">HOME</a></li>
					<li><a href="#">WORKS</a></li>
					<li><a href="#">ABOUT</a></li>
					<li><a href="#">SKILL</a></li>
					<li><a href="#">SERVICE</a></li>
					<li><a href="#">CONTACT</a></li>
				</ul>
			</nav>
        </div>
    </header>