<html>
<head>
</head>
<body bgcolor="#c7d0d9">
<?php
$conn=mysqli_connect("localhost","root","","emp");
// mysql_select_db("emp");
$query=mysqli_query($conn,"select * from contrproject where project_id='$_POST[id]'");
$query1=mysqli_query($conn,"select type,Duration,totalcost from project where project_id='$_POST[id]'");
while($record=mysqli_fetch_array($query))
{
echo "PROJECT ID: ".$record['project_id']."<br><br>";
echo
(
"<table border=1>
<tr>
	<th>Contractor ID</th>
	<th>Project Description</th>
	<th>Duration</th>
	<th>Total Cost</th>
</tr>
<tr>
	 <td>".$record['contractorid']
);
}
while($record1=mysqli_fetch_array($query1))
{
echo(
"<td>".$record1['type'].
"<td>".$record1['Duration'].
"<td>".$record1['totalcost'].
"</tr> </table>"
);
}
?>
</body>
</html>
