<?php
$aname = $_POST["aname"];
$link = str_replace(' ', '_', $aname);
$txt = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="../../../icon.png" sizes="16x16" type="image/png">
    <meta name="author" content="Magnus Fernandes">
    <meta name="description" content="The official website of Aashna KUNKOLIENKER.">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>ANK Beats | GALLERIA</title>
    <style>
        .loader{background-color:#fff;width:100%;height:100%;position:fixed;top:0;left:0;z-index:999}.load{position:absolute;top:50%;left:50%;margin-top:-100px;margin-left:-100px;width:200px;height:200px;background-image:url(../images/loader.png);-webkit-background-size:100% 200%;background-size:100% 200%;background-repeat:no-repeat;-webkit-animation-name:change;-webkit-animation-duration:1s;-webkit-animation-timing-function:steps(2);-webkit-animation-iteration-count:infinite;-webkit-animation-direction:normal;-moz-animation-name:change;-moz-animation-duration:1s;-moz-animation-timing-function:steps(2);-moz-animation-iteration-count:infinite;-moz-animation-direction:normal;-ms-animation-name:change;-ms-animation-duration:1s;-ms-animation-timing-function:steps(2);-ms-animation-iteration-count:infinite;-ms-animation-direction:normal;-o-animation-name:change;-o-animation-duration:1s;-o-animation-timing-function:steps(2);-o-animation-iteration-count:infinite;-o-animation-direction:normal;animation-name:change;animation-duration:1s;animation-timing-function:steps(2);animation-iteration-count:infinite;animation-direction:normal}@-webkit-keyframes change{0%{background-position:0 0}100%{background-position:0 -400px}}@keyframes change{0%{background-position:0 0}100%{background-position:0 -400px}}
    </style>
    <link rel="stylesheet" href="../css/all.css">
</head>
<body onload="hideloader()">
    <div class="loader">
        <div class="load"></div>
    </div>
    <div class="mainwrapper">
        <section class="menu">
            <div class="link">
                <a href="../../../"><p class="right-border">Home</p></a>
            </div>
            <div class="link">
                <a href="../../../About/"><p>About Me</p></a>
            </div>
            <div class="logo link">
                <img src="../images/logo.png" alt="AK Beats" class="img-responsive">
            </div>
            <div class="link">
                <a href="../../"><p class="right-border">Gallery</p></a>
            </div>
            <div class="link">
                <a href="../../../Contact/"><p>Contact Me</p></a>
            </div>
        </section>
        <section class="section gallery">
            <h1>' . $aname . '</h1>
            <div class="pics">
                <?php
                    $i = 1;
                    again:
                    if (file_exists("images/" . $i . ".jpg")) {
                        $str = file_get_contents($i . ".txt");
                        echo \'<a href="#"><div class="pic"><img src="images/\' . $i . \'.jpg" alt="DEFAULT" class="img-responsive"><article><p>\' . $str . \'</p></article></div></a>\';
                        $i = $i + 1;
                        goto again;
                    }
                ?>
            </div>
        </section>
        <section class="footer">
            <h4>AASHNA KUNKOLIENKER &copy; | 2015</h4>
            <p>Powered by <a href="http://www.amberzile.com">Amber<span>Zile</span></a></p>
        </section>
        <section class="social">
            <a href="https://www.youtube.com/channel/UC-n9Vqug6-XxTyoufI6r3fg" target="_blank"><div class="youtube"><img src="../../../images/yt.svg" class="img-responsive" alt="Youtube"></div><h4>YOUTUBE</h4></a>
            <a href="https://www.facebook.com/ankbeats.comOfficial" target="_blank"><div class="facebook"><img src="../../../images/fb.svg" class="img-responsive" alt="Facebook"></div><h4>FACEBOOK</h4></a>
        </section>
    </div>
<script src="../../../js/lib/jquery.min.js"></script>
<script src="../js/all.js"></script>
</body>
</html>';
if (!file_exists('../Gallery/Photos/'.$link)) {
    mkdir('../Gallery/Photos/'. $link, 0777, true);
    mkdir('../Gallery/Photos/'. $link .'/images', 0777, true);
}
$target_dir = "../Gallery/Photos/". $link ."/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 50000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "../Gallery/Photos/". $link . "/" . $link . ".jpg")) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        $myfile = fopen("../Gallery/Photos/". $link . "/index.php", "w") or die("Unable to open file!");
        fwrite($myfile, $txt);
        fclose($myfile);
        header("Location: ../admin");
    }
    else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>