<!DOCTYPE html>
    <hmtl>
        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>View Confirmation</title>
            <link rel="stylesheet" type="text/css" href="">
        </head>

<body>
    <div id="container">
    <div id="header">

<?php
$host="localhost";
$username="root";
$password="";
$db_name="test";
$tbl_name="booking";

mysql_connect("$host","$username","$password")of die('cannot connect server');
mysql_select("$db_name")or die('cannot select DB');

$departure = $_POST["departure"];
$destination = $_POST["destination"];
$class = $_POST["class"];
$airline = $_POST["airline"];
$seat = $_POST["seat"];
$terminal = $_POST["terminal"];
$time = $_POST["time"];
$zeit = $_POST["zeit"];
$datum = $_POST["datum"];

$sql="INSERT INTO booking Value('$passenger', '$adult', '$child','$gender','$departure','$destination','$class','$airline','$seat','$time','$date','$zeit','$datum')";
$result=mysql_query($sql);

mysql_close();
?>
<p>You have now entered your flight details. Please continue the next process.</p>
<img src="loading.jpg" style="width:50%">

    <a href="http://localhost/Air/data.php">
        <button>Next</button>
</a>
</body>

