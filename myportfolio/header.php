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
	<header>
		<nav class="navbar navbar-default" style="margin-bottom:0;">
		  <div class="navbar-header">
		    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
		      <span class="sr-only">メニュー</span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		      <span class="icon-bar"></span>
		    </button>
		  </div>
		  <div id="bs-navbar-collapse-1" class="collapse navbar-collapse">
		    <ul class="nav navbar-nav">
		      <li><a href="#">HOME</a></li>
		      <li><a href="#">WORKS</a></li>
			  <li><a href="#">ABOUT</a></li>
              <li><a href="#">SKILL</a></li>
              <li><a href="#">SERVICE</a></li>
		      <li><a href="#">CONTACT</a></li>
		    </ul>
		  </div>
		</nav>
		<div id="top-vg">
			<img src="<?php echo get_template_directory_uri(); ?>/src/img/sample.jpg" alt="トップページ画像" >
		</div>
	</header>