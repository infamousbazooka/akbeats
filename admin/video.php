<?php
$videoname = $_POST['videoname'];
$directory = '../Gallery/Videos/videos/';
$files = glob($directory . "*.mp4");
$filecount = 1;
if ($files){
    echo $filecount;
    $filecount = count($files) + 1;
    echo $filecount;
}
$target_dir = "../Gallery/Videos/videos/";
$target_file = $target_dir . basename($_FILES["videotoupload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["videotoupload"]["size"] > 100000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "mp4" && $imageFileType != "MP4") {
    echo "Sorry, only mp4 files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["videotoupload"]["tmp_name"], "../Gallery/Videos/videos/" . $filecount . ".mp4")) {
        echo "The file ". basename( $_FILES["videotoupload"]["name"]). " has been uploaded.";
        $myfile = fopen("../Gallery/Videos/videos/". $filecount . ".txt", "w") or die("Unable to open file!");
        fwrite($myfile, $videoname);
        fclose($myfile);
        header("Location: ../admin");
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>