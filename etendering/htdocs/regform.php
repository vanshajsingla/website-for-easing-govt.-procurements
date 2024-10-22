<html>
<head>
<title>pwrmc e-tendering</title>
<style>

.nav{
height:40px;
background:#21A02A;
}

.nav ul{
margin:0;
padding:0;
}

.nav ul li{
list-style:none;
font-size:19px;
}

.nav ul li a{
text-decoration:none;
float:left;
display:block;
padding:10px 20px;
color:#fff;
}

.nav ul li a:hover{
color:black;
font-weight:bold;
}

#bidinfo{
margin:10px auto;
width:75%;
}

#fieldset{
color:blue;
border:2px solid black;
background:#fff;
}

#legend{
height:40px;
padding-bottom:10px;
color:white;
border:2px solid black;
border-radius:15px;
background:#21A02A;
}

</style>
</head>
<body bgcolor="#c7d0d9">
<img src="https://eprocure.gov.in/eprocure/images/topban.png" height=25% width=100%>    
<div class="nav">
  <ul>
    <li class="active"> <a href="H:\DBMS\FE\e-tendering.html">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Home &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|</a> </li>
	<li> <a href="http://localhost/regform.php">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Registration &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|</a> </li>
	<li> <a href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Payment Guidelines & Policies &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|</a> </li>
	<li> <a href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Other Tenders &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|</a> </li>
	<li> <a href="#">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp FAQ's &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a> </li>
  </ul>
</div>

<div id="bidinfo">
<fieldset id="fieldset">
<legend id="legend"><h3>Important Information</h3></legend>
Bidders are advised to select proper Type of Organization correctly to avoid delay in registration process.<br>
Company name should be provided as per the PAN submitted.<br>
Foreign Vendors can provide TAX ID with Request letter in company letter head instead of PAN CARD.  <br>
Obtain the Class 3 Digital Signature from any of the CCA Controller of Certifying Authority, India or if any support required on DSC please contact back to us.<br>
All the documents should be attested by authorized person of the Company.<br>
Bidders are requested to show the Original Documents for verification purposes at Help Desk at the time of enabling the user id. <br>
Kindly upload the mandatory documents as mentioned below at the time of Registration <br>
a. Signed and Stamped Request letter scan mentioning the user id activation.<br>
b. Signed PAN Card Copy. <br>
c. Any Government issued documents like Service Tax, VAT, CST if any etc.<br>
d. Payment or Registration Acknowledgment Generated after registration. <br>
Users are advised to provide the correct email id to the e-procurement system. <br>
Activation process will take at most 24 working hours after the receipt of this requisition mail on above-mentioned e-mail IDs.<br>
</fieldset>
</div>

<div id="bidinfo">
<form method=POST>
<fieldset id="fieldset">
<legend id="legend"><h3>Bidder Information:</h3></legend>
<center>
<table>
<tr>
<td>Bidder First Name:<td><input type=text name="t2"><br/><br/><tr>
<td>Bidder Last Name:<td> <input type=text name="t2a"><br/><br/><tr>
<td>Speciality:<td><input type=text name="t3"><br/><br/><tr>
<td>Phone:<td><input type=text name="t4"><br/><br/><tr>
<td>Email-id<td><input type=text name="t5"><br/><br/><tr>
<td>Pan_no.:<td><input type=text name="t6"><br/><br/><tr>
</table>
</center>
</fieldset>
</div>

<div id="bidinfo">
<fieldset id="fieldset">
<legend id="legend"><h3>Address:</h3></legend>
<center>
<table>
<tr>
<td>Permanent Address:<td><input type=text name="t12"><br/><br/><tr>
<td>City:<td><input type=text name="t13"><br/><br/><tr>
<td>Pincode:<td><input type=text name="t14"><br/><br/><tr>
<td>State:<td><input type=text name="t16"><br/><br/><tr>
<td>Country:<td><input type=text name="t15"><br/><br/><tr>
</table>
</center>
</fieldset>
</div>

<div id="bidinfo">
<fieldset id="fieldset">
<legend id="legend"><h3>Bank Information:</h3></legend>
<center>
<table>
<tr>
<td>Account Number:<td><input type=text name="t8"><br/><br/><tr>
<td>IFSC CODE:<td><input type=text name="t9"/><br/><br/><tr>
<td>Bank:<td><input type=text name="t10"><br/><br/><tr>
<td>Bank branch:<td><input type=text name="t11"><br/><br/><tr>
</table>
<input type=checkbox name="s1">I accept that all the information is correct.<br/>
<input type=reset>&nbsp<input type=submit name="s" value="Submit"><br/>
</center>
</fieldset>
</div>

<?php
if(isset($_POST["s"]))
{
$rand=rand(100,999);
$id=$_POST["t2"].$rand;
$name=$_POST["t2"].$_POST["t2a"];
$spe=$_POST["t3"];
$ph=$_POST["t4"];
$em=$_POST["t5"];
$p=$_POST["t6"];
$a=$_POST["t8"];
$ic=$_POST["t9"];
$bn=$_POST["t10"];
$bb=$_POST["t11"];
$pa=$_POST["t12"];
$c=$_POST["t13"];
$pc=$_POST["t14"];
$co=$_POST["t15"];
$st=$_POST["t16"];
mysql_connect("localhost","root","");
mysql_select_db("emp");
mysql_query("insert into bank values('$ic','$bn','$bb')");
mysql_query("insert into contractor values('$id','$name','$spe','$ph','$em','$p','$ic','a')");
mysql_query("insert into address values('$id','$pa','$c','$pc','$co','$st')");
echo "<h3>Congrats</h3>You have been successfully registered <br/> Your Login id: $id";
}
?>
</form>
</body>
</html>