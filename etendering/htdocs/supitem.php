<html>
<body>
<form method=post >
<h1>SupplierItems form</h1><br/>
<table>
<tr>
<td>Supplierid:<td><input type=text name="t1"/><br/><tr>
<td>items:<td><input type=text name="t2"><br/><tr>
</table>
<input type=reset>&nbsp<input type=submit name="s" value="Submit"><br/>
<?php
if(isset($_POST["s"]))
{
$c=$_POST["t1"];
$p=$_POST["t2"];
$conn=mysqli_connect("localhost","root","","emp");
// mysql_select_db("emp");
mysqli_query($conn,"insert into supitem values('$c','$p')");
echo "Added";
}
?>
</form>
</body>
</html>
