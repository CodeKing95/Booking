<?php
$host="localhost";
$username="root";
$password="";
$db_name="test";
$tbl_name="airlines";

mysql_connect("$host","$username","$password")or die('cannot connect server');
mysql_select_db("$db_name")or die('cannot select DB');

$company = $_POST["company"];
$flightname = $_POST["flightname"];
$flightid = $_POST["flightid"];
$class = $_POST["class"];
$capacity = $_POST["capacity"];  
$departure = $_POST["departure"];
$destination = $_POST["destination"];

$sql="INSERT INTO airlines Value ('$company','$flightname','$flightid','$class','$capacity,'$departure','$destination')";
$result=mysql_query($sql);

if($result){
    echo "Successful"."<BR>";
    echo "<a href='view-airlines.php'>View airlines</a>";
}
mysql_close();
?>
