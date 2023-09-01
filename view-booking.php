<?php
$host="localhost";
$user="root";
$passwd="";
$database="test";
$tbl_name="booking";

mysql_connect($host,$user,$passwd)or die('cannot connect server');
mysql_select_db($database)or die('cannot select DB');

$result=mysql_query("SELECT * FROM $tbl_name");

while($rows= mysql_fetch_array($result)){
?>
<table width="400" cellpadding="0" cellspacing="1">
<tr>
<td><table width="400" cellpadding="3" cellspacing="1">

<tr>
    <td>Departure</td>
    <td>:</td>
    <td><?php echo $rows['departure']; ?></td>
</tr>

<tr>
    <td>destination</td>
    <td>:</td>
    <td><?php echo $rows['destination']; ?></td>
</tr>

<tr>
    <td>Class</td>
    <td>:</td>
    <td><?php echo $rows['class']; ?></td>
</tr>


<tr>
    <td>Airline</td>
    <td>:</td>
    <td><?php echo $rows['airline']; ?></td>
</tr>

<tr>
    <td>Seat</td>
    <td>:</td>
    <td><?php echo $rows['seat']; ?></td>
</tr>

<tr>
    <td>Terminal</td>
    <td>:</td>
    <td><?php echo $rows['terminal']; ?></td>
</tr>

<tr>
    <td>Time</td>
    <td>:</td>
    <td><?php echo $rows['time']; ?></td>
</tr>

<tr>
    <td>Zeit</td>
    <td>:</td>
    <td><?php echo $rows['zeit']; ?></td>
</tr>

<tr>
    <td>Datum</td>
    <td>:</td>
    <td><?php echo $rows['datum']; ?></td>
</tr>

</table></td>
</tr>
</table>
<BR>
<?php
}
mysql_close();
?>
