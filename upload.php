<?php
$target_dir = "uploads/";

$name = $_POST['name'];
$dept = $_POST['dept'];
$year = $_POST['year'];
$phone = $_POST['phone'];

$filename = $name."_".$dept."_".$year."_".$phone;
$extension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
$filename = $filename.".".$extension;

$target_file = $target_dir . $filename;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CYBELLA - Computer Science department Inauguration Sree Narayana College 2018-19</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700" rel="stylesheet">
    <style>
        body{
            background: #032030;
            color:#fff !important;
            font-size:1.2em;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    $uploadOk = 1;
    $filename = $name.md5(rand(1,1000))."_".$dept."_".$year."_".$phone;
    $extension = pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION);
    $filename = $filename.".".$extension;
    echo "<blockquote>Another one inserted an image same as your image name thus we renamed it to ".$filename.".  It doesn't matter. We just informed</blockquote>";
}

if ($_FILES["fileToUpload"]["size"] > 5000000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
</div>
</body>
</html>
<?php
?>