<?php
$key = $_POST['key'];
if($key!="muneebkattody")   {
    echo "invalid Password";
} else{
    echo "logged Successfully";
}

// error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cybella";

$new = new mysqli($servername, $username, $password,$dbname);


 if ($new->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

            $sql = "SELECT * FROM input";
            $result = $new->query($sql);

            $str = "{";
            $length = $result->num_rows;
            $count=0;
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   $str.='"'.$row["id"].'":'.'{"name":"'.$row["name"].'","phone":"'.$row["phone"].'","dept":"'.$row["department"].'","hosp":"'.$row["hospital"].'","place":"'.$row["place"].'"}';
                   $count++;
                    if($count!=$length){
                        $str.=",";
                    }
                }
            }
                $str.="}";
                echo $str;
            ?>