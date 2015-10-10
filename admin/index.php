<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="../icon.png" sizes="16x16" type="image/png">
	<meta name="author" content="Magnus Fernandes">
	<meta name="description" content="The official website of Aashna KUNKOLIENKER.">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ANK Beats | Admin</title>
	<style>
		.loader{background-color:#fff;width:100%;height:100%;position:fixed;top:0;left:0;z-index:999}.load{position:absolute;top:50%;left:50%;margin-top:-100px;margin-left:-100px;width:200px;height:200px;background-image:url(images/loader.svg);-webkit-background-size:100% 200%;background-size:100% 200%;background-repeat:no-repeat;-webkit-animation-name:change;-webkit-animation-duration:1s;-webkit-animation-timing-function:steps(2);-webkit-animation-iteration-count:infinite;-webkit-animation-direction:normal;-moz-animation-name:change;-moz-animation-duration:1s;-moz-animation-timing-function:steps(2);-moz-animation-iteration-count:infinite;-moz-animation-direction:normal;-ms-animation-name:change;-ms-animation-duration:1s;-ms-animation-timing-function:steps(2);-ms-animation-iteration-count:infinite;-ms-animation-direction:normal;-o-animation-name:change;-o-animation-duration:1s;-o-animation-timing-function:steps(2);-o-animation-iteration-count:infinite;-o-animation-direction:normal;animation-name:change;animation-duration:1s;animation-timing-function:steps(2);animation-iteration-count:infinite;animation-direction:normal}@-webkit-keyframes change{0%{background-position:0 0}100%{background-position:0 -400px}}@keyframes change{0%{background-position:0 0}100%{background-position:0 -400px}}
	</style>
	<link rel="stylesheet" href="../css/lib/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body onload="hideloader()">
	<div class="loader">
		<div class="load"></div>
	</div>
	<div class="mainwrapper">
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="callto://+918322226464" class="navbar-btn btn btn-danger" style="color:#fff">For help call +91-9637078086</a>
					<button class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navHeaderCollapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse navHeaderCollapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active" onclick="display('#album')"><a href="#">Add Albums</a></li>
		    			<li onclick="display('#photo')"><a href="#">Add Images</a></li>
		    			<li onclick="display('#video')"><a href="#">Add Videos</a></li>
		    			<li onclick="display('#achievement')"><a href="#">Add Achievements</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container jumbotron album" id="album">
			<form action="upload.php" method="post" enctype="multipart/form-data">
				<h3>SELECT ALBUM:</h3>
				<div class="form-group">
					<input required type="file" name="fileToUpload" id="fileToUpload">
				</div>
				<input required type="text" name="aname" class="form-control" placeholder="Album Title">
				<button type="submit" class="btn btn-default" name="submit">Upload</button>
			</form>
		</div>
		<div class="container jumbotron photo" id="photo">
			<form action="photo.php" method="post" enctype="multipart/form-data">
				<select name="albumname" class="form-control" required>
					<option value="">Please select</option>
					<?php
						$i = 0;
						$directories = glob('../Gallery/Photos' . '/*' , GLOB_ONLYDIR);
						for ($i = 0; $i < sizeof($directories); $i++) {
							$directories[$i] = str_replace('../Gallery/Photos/', '', $directories[$i]);
						    if($directories[$i] != 'css' && $directories[$i] != 'images' && $directories[$i] != 'js'){
								echo "<option value=" . $directories[$i] . ">" . $directories[$i] . "</option>";
							}
						}
					?>
				</select>
				<h3>SELECT ALBUM IMAGE:</h3>
				<div class="form-group">
					<input required type="file" name="imagetoupload" id="imagetoupload">
				</div>
				<button type="submit" class="btn btn-default" name="submit">Upload</button>
			</form>
		</div>
		<div class="container jumbotron video" id="video">
			<form action="video.php" method="post" enctype="multipart/form-data">
				<h3>SELECT VIDEO:</h3>
				<div class="form-group">
					<input required type="file" name="videotoupload" id="videotoupload">
				</div>
				<input required type="text" name="videoname" class="form-control" placeholder="Video Title">
				<button type="submit" class="btn btn-default" name="submit">Upload</button>
			</form>
		</div>
		<div class="container jumbotron achievement" id="achievement">
			<form action="achievements.php" method="post" enctype="multipart/form-data">
				<h3>SELECT ACHIEVEMENT IMAGE:</h3>
				<div class="form-group">
					<input required type="file" name="atoupload" id="atoupload">
				</div>
				<input required type="text" name="acname" class="form-control" placeholder="Achievement description">
				<button type="submit" class="btn btn-default" name="submit">Upload</button>
			</form>
		</div>
	</div>
<script src="../js/lib/jquery.min.js"></script>
<script src="../js/lib/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>