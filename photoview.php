<?php
$dirname = "uploads/";
$images = scandir($dirname);
?>
<html>
<head>
    <style>
        img{
            width:100%;
        }
    </style>
</head>
</html>
<?php
$ignore = Array(".", "..");
foreach($images as $curimg){
    if(!in_array($curimg, $ignore)) {
        echo "<a href='uploads/".$curimg."'><img src='uploads/".$curimg."'/></a><br/>";
    };
}
?>