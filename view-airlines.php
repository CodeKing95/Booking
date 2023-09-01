<?php
$host="localhost";
$user="root";
$passwd="";
$database="test";
$tbl_name="airlines";

mysql_connect($host,$user,$passwd)or die('cannot connect server');
mysql_select_db($database)or die('cannot select DB');

$result=mysql_query("SELECT * FROM $tbl_name");

while($rows= mysql_fetch_array($result)){
?>
<table width="400" cellpadding="0" cellspacing="1">
<tr>
<td><table width="400" cellpadding="3" cellspacing="1">

<tr>
    <td>company</td>
    <td>:</td>
    <td><?php echo $rows['company']; ?></td>
</tr>

<tr>
    <td>flightname</td>
    <td>:</td>
    <td><?php echo $rows['flightname']; ?></td>
</tr>

<tr>
    <td>FlightID</td>
    <td>:</td>
    <td><?php echo $rows['flightid']; ?></td>
</tr>


<tr>
    <td>Class</td>
    <td>:</td>
    <td><?php echo $rows['class']; ?></td>
</tr>

<tr>
    <td>Capacity</td>
    <td>:</td>
    <td><?php echo $rows['capacity']; ?></td>
</tr>

<tr>
    <td>Departure</td>
    <td>:</td>
    <td><?php echo $rows['departure']; ?></td>
</tr>

<tr>
    <td>Destination</td>
    <td>:</td>
    <td><?php echo $rows['destination']; ?></td>
</tr>

</table></td>
</tr>
</table>
<BR>
<?php
}
mysql_close();
?>