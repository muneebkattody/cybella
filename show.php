<?php
$key = $_POST['key'];
if($key!="muneebkattody")   {
    echo "invalid Password";
} else{
// error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cybella";

$new = new mysqli($servername, $username, $password,$dbname);


 if ($new->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }

            $sql = "SELECT * FROM register";
            $result = $new->query($sql);

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
    <script src="main.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700" rel="stylesheet">
</head>

<body>
    <table class="striped responsive-table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Department</th>
            <th>Year</th>
            <th>Programme</th>
        </tr>
    <?php
            $length = $result->num_rows;
            $count=0;
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['phone']."</td><td>".$row['department']."</td><td>".$row['year']."</td><td>".$row['programme']."</td></tr>";
                }
                   
        }
?>
        </table>
        </body>
        </html>
    <?php
        }
    ?>