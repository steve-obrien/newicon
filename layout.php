<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Newicon</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="vendor/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="http://fast.fonts.com/cssapi/e1c896c2-a59a-4de3-ac45-8ecb88eaa64a.css" rel="stylesheet" type="text/css" />
		<link href="css/newicon.css" rel="stylesheet">
		<link rel="stylesheet/less" type="text/css" href="css/newicon.less" />
		<script src="vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
		<script src="http://fast.fonts.com/jsapi/e1c896c2-a59a-4de3-ac45-8ecb88eaa64a.js" type="text/javascript"></script>
		<script src="vendor/less.js" type="text/javascript"></script>
	</head>
	<body>
		<!--[if lt IE 7]>
			<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
		<![endif]-->
		
		<header>
			<div class="head-stripe"></div>
			<div class="container">
				<div class="navbar">
					<div class="navbar-inner">
						<a class="brand newicon-logo" href="/newicon"	>
							<img src="img/newicon_logo.png" />
						</a>
						<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
						<a class="btn btn-navbar btn-inverse" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a>
						<!--Everything you want hidden at 940px or less, place within here--> 
						<div class="nav-collapse">
							<ul class="nav">
								<li <?php active('./services.php') ?>><a href="./services.php">Services</a></li>
								<li <?php active('./process.php') ?>><a href="./process.php">Our Process</a></li>
								<li <?php active('./case-studies.php') ?>><a href="./case-studies.php">Case Studies</a></li>
								<li <?php active('./blog.php') ?>><a href="./blog.php">Tech-Talk</a></li>
								<li <?php active('./team.php') ?>><a href="./team.php">The Team</a></li>
								<li <?php active('./contact.php') ?>><a href="./contact.php">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<?php echo $content; ?>
		
		<footer class="big-foot">
			<div class="container">                
				<p>&copy; Company 2012</p>
			</div>
		</footer>

		<script>window.jQuery || document.write('<script src="vendor/jquery-1.8.2.min.js"><\/script>')</script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
    </body>
</html>