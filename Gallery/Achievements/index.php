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
	<link rel="stylesheet" href="../../css/lib/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body onload="hideloader()">
	<div class="loader">
		<div class="load"></div>
	</div>
	<div class="mainwrapper">
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
		<section class="section achieved">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<?php
						$i = 1;
						$temp = 0;
						again:
						if (file_exists("slider/" . $i . ".jpg")) {
							if (file_exists("slider/" . $i . ".txt")){
								if ($i == 1) {
									$str = file_get_contents("slider/" . $i . ".txt");
									echo '<li data-target="#myCarousel" data-slide-to="0" class="active"></li>';
									$i = $i + 1;
									$temp = 1;
									goto again;
								}
								$slidetag = $i - 1;
								$str = file_get_contents("slider/" . $i . ".txt");
								echo '<li data-target="#myCarousel" data-slide-to="' . $slidetag . '"></li>';
								$i = $i + 1;
								$temp = 1;
								goto again;
							}
						}
						if($temp != 1){
							echo "<h2>Stay tuned to check my achievements.</h2>";
						}
					?>
				</ol>
				<div class="carousel-inner" role="listbox">
					<?php
						$j = 1;
						$temp1 = 0;
						againt:
						if (file_exists("slider/" . $j . ".jpg")) {
							if (file_exists("slider/" . $j . ".txt")){
								if ($j == 1) {
									$str = file_get_contents("slider/" . $j . ".txt");
									echo '<div class="item active"><img class="img-responsive" src="slider/1.jpg" alt="' . $str . '"></div>';
									$j = $j + 1;
									$temp1 = 1;
									goto againt;
								}
								$str = file_get_contents("slider/" . $j . ".txt");
								echo '<div class="item"><img class="img-responsive" src="slider/' . $j . '.jpg" alt="Chania"></div>';
								$j = $j + 1;
								$temp = 1;
								goto againt;
							}
						}
						if($temp1 != 1){
							echo "<h2>Stay tuned to check my achievements.</h2>";
						}
					?>
					<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</section>
		<section class="footer">
			<h4>AASHNA KUNKOLIENKER &copy; | 2015</h4>
		</section>
	</div>
<script src="../../js/lib/jquery.min.js"></script>
<script src="../../js/lib/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>