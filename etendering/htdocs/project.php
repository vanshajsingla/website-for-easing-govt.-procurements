<html>
<body>
<form method=post >
<h1>Project details</h1><br/>
<table>
<tr>
<td>Project_id:<td><input type=text name="t1"/><br/><tr>
<td>Type:<td><input type=text name="t2"><br/><tr>
<td>Duration:<td><input type=text name="t3"><br/><tr>
<td>TotalCost:<td><input type=text name="t4"><br/><tr>
</table>
<input type=reset>&nbsp<input type=submit name="s" value="Submit"><br/>
<?php
if(isset($_POST["s"]))
{
$in=$_POST["t1"];
$c=$_POST["t2"];
$co=$_POST["t3"];
$un=$_POST["t4"];
$conn=mysqli_connect("localhost","root","","emp");
// mysql_select_db("emp");
mysqli_query($conn,"insert into project values('$in','$c','$co','$un')");
echo "Added";
}
?>
</form>
</body>
</html>
