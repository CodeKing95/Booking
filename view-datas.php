<?php
$host="localhost";
$user="root";
$passwd="";
$database="test";
$tbl_name="datas";

mysql_connect($host,$user,$passwd)or die('cannot connect server');
mysql_select_db($database)or die('cannot select DB');

$result=mysql_query("SELECT * FROM $tbl_name");

while($rows= mysql_fetch_array($result)){
?>
<table width="400" cellpadding="0" cellspacing="1">
<tr>
<td><table width="400" cellpadding="3" cellspacing="1">

<tr>
    <td>Data</td>
    <td>:</td>
    <td><?php echo $rows['data']; ?></td>
</tr>

<tr>
    <td>Name</td>
    <td>:</td>
    <td><?php echo $rows['name']; ?></td>
</tr>

<tr>
    <td>Last</td>
    <td>:</td>
    <td><?php echo $rows['last']; ?></td>
</tr>


<tr>
    <td>Gender</td>
    <td>:</td>
    <td><?php echo $rows['gender']; ?></td>
</tr>

<tr>
    <td>Occupation</td>
    <td>:</td>
    <td><?php echo $rows['occupation']; ?></td>
</tr>

<tr>
    <td>Date</td>
    <td>:</td>
    <td><?php echo $rows['date']; ?></td>
</tr>

<tr>
    <td>Phone</td>
    <td>:</td>
    <td><?php echo $rows['phone']; ?></td>
</tr>

<tr>
    <td>Email</td>
    <td>:</td>
    <td><?php echo $rows['email']; ?></td>
</tr>

<tr>
    <td>Home</td>
    <td>:</td>
    <td><?php echo $rows['home']; ?></td>
</tr>

<tr>
    <td>City</td>
    <td>:</td>
    <td><?php echo $rows['city']; ?></td>
</tr>

<tr>
    <td>Passport</td>
    <td>:</td>
    <td><?php echo $rows['passport']; ?></td>
</tr>

<tr>
    <td>Expiray</td>
    <td>:</td>
    <td><?php echo $rows['expiray']; ?></td>
</tr>

</table></td>
</tr>
</table>
<BR>
<?php
}
mysql_close();
?>