<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="../../icon.png" sizes="16x16" type="image/png">
	<meta name="author" content="Magnus Fernandes">
	<meta name="description" content="The official website of Aashna KUNKOLIENKER.">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ANK Beats | GALLERIA</title>
	<style>
		.loader{background-color:#fff;width:100%;height:100%;position:fixed;top:0;left:0;z-index:999}.load{position:absolute;top:50%;left:50%;margin-top:-100px;margin-left:-100px;width:200px;height:200px;background-image:url(images/loader.png);-webkit-background-size:100% 200%;background-size:100% 200%;background-repeat:no-repeat;-webkit-animation-name:change;-webkit-animation-duration:1s;-webkit-animation-timing-function:steps(2);-webkit-animation-iteration-count:infinite;-webkit-animation-direction:normal;-moz-animation-name:change;-moz-animation-duration:1s;-moz-animation-timing-function:steps(2);-moz-animation-iteration-count:infinite;-moz-animation-direction:normal;-ms-animation-name:change;-ms-animation-duration:1s;-ms-animation-timing-function:steps(2);-ms-animation-iteration-count:infinite;-ms-animation-direction:normal;-o-animation-name:change;-o-animation-duration:1s;-o-animation-timing-function:steps(2);-o-animation-iteration-count:infinite;-o-animation-direction:normal;animation-name:change;animation-duration:1s;animation-timing-function:steps(2);animation-iteration-count:infinite;animation-direction:normal}@-webkit-keyframes change{0%{background-position:0 0}100%{background-position:0 -400px}}@keyframes change{0%{background-position:0 0}100%{background-position:0 -400px}}
	</style>
	<link rel="stylesheet" href="css/style.css">
</head>
<body onload="hideloader()">
	<div class="loader">
		<div class="load"></div>
	</div>
	<div class="mainwrapper">
		<div class="mobile">
			<section class="btn">-</section>
			<section><h3>ANK beats</h3></section>
			<ul>
				<li><a href="../../"><h4>Home</h4></a></li>
				<li><a href="../../About/"><h4>About Me</h4></a></li>
				<li><a href="../"><h4>Gallery</h4></a></li>
				<li><a href="../../Contact/"><h4>Contact Me</h4></a></li>
			</ul>
		</div>
		<section class="menu">
			<div class="link">
				<a href="../../"><p class="right-border">Home</p></a>
			</div>
			<div class="link">
				<a href="../../About/"><p>About Me</p></a>
			</div>
			<div class="logo link">
				<img src="images/logo.png" alt="AK Beats" class="img-responsive">
			</div>
			<div class="link">
				<a href="../"><p class="right-border">Gallery</p></a>
			</div>
			<div class="link">
				<a href="../../Contact/"><p>Contact Me</p></a>
			</div>
		</section>
		<section class="section gallery">
			<h1><span>ALBUMS</span></h1>
			<div class="pics">
				<?php
					$i = 0;
					$directories = glob('../Photos' . '/*' , GLOB_ONLYDIR);
					for ($i = 0; $i < sizeof($directories); $i++) {
						$directories[$i] = str_replace('../Photos/', '', $directories[$i]);
						$link = $directories[$i];
						$link = str_replace(' ', '_', $link);
					    if($directories[$i] != 'css' && $directories[$i] != 'images' && $directories[$i] != 'js'){
							echo '<a href="' . $directories[$i] . '/"><div class="pic"><img src="' . $link . '/' . $link .'.jpg" alt="Aashna Kunkolienker" class="img-responsive"><div class="bar"><h2>' . $directories[$i] . '</h2></div></div></a>';
						}
					}
				?>
			</div>
		</section>
		<section class="footer">
			<h4>AASHNA KUNKOLIENKER &copy; | 2015</h4>
			<p>Powered by <a href="http://www.amberzile.com">Amber<span>Zile</span></a></p>
		</section>
		<section class="social">
			<a href="https://www.youtube.com/channel/UC-n9Vqug6-XxTyoufI6r3fg" target="_blank"><div class="youtube"><img src="../../images/yt.svg" class="img-responsive" alt="Youtube"></div><h4>YOUTUBE</h4></a>
			<a href="https://www.facebook.com/ankbeats.comOfficial" target="_blank"><div class="facebook"><img src="../../images/fb.svg" class="img-responsive" alt="Facebook"></div><h4>FACEBOOK</h4></a>
		</section>
	</div>
<script src="../../js/lib/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>