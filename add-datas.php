<!DOCTYPE html>
    <html>
        <head>
            <meta name="viewport" content="width=device-width, intial-scale=1">
            <title>View Confirmation</title>
            <link rel="stylehseet" type="text/css" href="">
</head>


<?php
$host="localhost";
$username="root";
$password="root";
$db_name="test";
$tbl_name="datas";

mysql_connect("$host","$username","$password")or die('cannot connect server');
mysql_select_db("$db_name")or die('cannot select DB');

$data = $_POST["data"];
$name = $_POST["name"];
$last = $_POST["last"];
$gender = $_POST["gender"];
$occupation = $_POST["occupation"];
$date = $_POST["date"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$home = $_POST["home"];
$city = $_POST["city"];
$passport = $_POST["passport"];
$expiray = $_POST["expiray"];

$sql="INSERT INTO datas VALUES('$datas','$name','$last','$gender','$occupation','$date','$phone','$email','$home','$city','$passport','$expiray')";
$result=mysql_query($sql);

mysql_close();
?>
<img src=""style="width:50%">

<body>
    <a href="view-datas.php">
            <button>Next Process</button>
</a>
</body>
