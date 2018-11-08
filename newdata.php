<?php
    header('Access-Control-Allow-Origin: *');
// error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cybella";
// Create connection
$new = new mysqli($servername, $username, $password,$dbname);

// Check connection
 if ($new->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

    $name = $_POST['name'];
    $dept = $_POST['dept'];
    $year = $_POST['year'];
    $prog = $_POST['prog'];
    $phone = $_POST['phone'];


    $query = "INSERT INTO register(name,department,year,programme,phone) values('".$name."','".$dept."','".$year."','".$prog."','".$phone."')";
    if($new->query($query))    {
        echo "Data Uploaded Successfully!";    
    }

             
    ?>
