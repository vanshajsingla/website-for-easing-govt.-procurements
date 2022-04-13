<html>
<head>
</head>
<body bgcolor="#c7d0d9">
<?php
$conn=mysqli_connect("localhost","root","","emp");
// mysql_select_db("emp");
$query=mysqli_query($conn,"select * from bidding where tender_no='$_POST[id]'");
while($record=mysql_fetch_array($query))
{
echo "Tender Number: ".$record['tender_no']."<br><br>";
echo
(
"<table border=1>
<tr>
	<th>Contractor ID</th>
	<th>Bid</th>
</tr>
<tr>
	 <td>".$record['contractorid'].
	 "<td>".$record['bid'].
"</tr> </table>"
);
}
?>
</body>
</html>
