<?php
$albumname = $_POST["albumname"];
if (!file_exists('../Gallery/Photos/'.$albumname)) {
    mkdir('../Gallery/Photos/'. $albumname .'/images', 0777, true);
}
$directory = '../Gallery/Photos/'. $albumname .'/images/';
$files = glob($directory . "*");
$filecount = 1;
if ($files){
    $filecount = count($files) + 1;
}
$target_dir = "../Gallery/Photos/". $albumname ."/images/";
$target_file = $target_dir . basename($_FILES["imagetoupload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["imagetoupload"]["tmp_name"]);
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
if ($_FILES["imagetoupload"]["size"] > 5000000) {
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
    if (move_uploaded_file($_FILES["imagetoupload"]["tmp_name"], "../Gallery/Photos/". $albumname . "/images/" . $filecount . ".jpg")) {
        echo "The file ". basename( $_FILES["imagetoupload"]["name"]). " has been uploaded.";
        header("Location: ../admin");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>