<html>
<head>
</head>
<body bgcolor="#c7d0d9">
<?php
$conn=mysqli_connect("localhost","root","","emp");
// mysql_select_db("emp");
$query=mysqli_query($conn,"select * from latest_tender");
echo "<h2>"."Latest Projects: "."</h2>";
echo "<table border=2>
<tr>
	<th>Tender Number</th>
	<th>Tender Description</th>
	<th>Document Request Date</th>
</tr>";
while($record=mysqli_fetch_array($query))
{
echo
(

"<tr>
	 <td>".$record['tender_no'].
	 "<td>".$record['tenderdescription'].
	 "<td>".$record['requestdate'].
"</tr>"
);
}
"</table>"
?>

</body>
</html>
