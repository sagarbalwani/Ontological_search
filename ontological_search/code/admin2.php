<?php
include('lock.php');
$sql="select flag from admin where username='$login_session'";
$result=mysql_query($sql); 
$row = mysql_fetch_row($result); 
if($row[0]!="ad")
{
header("Location: login.php");
}
?>
<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>home</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="menu-wrapper">
	<div id="menu">
		<ul>	
			<li><a href="./welcome.php">Home</a></li>
			<li><a href="./modify.php">Modify Dictionary</a></li>
 			<li><a href="./graph.php">Create Graph</a></li>
			<li><a href="./search.php">Search</a></li>
			<li><a href="./logout.php">Log Out</a></li>
		</ul>
	</div>
			</div>
</div>
<?php
echo "<h3><center></br>edit registrations</br></br></h3>";

//include('lock.php');
$sql="select username,fname,lname,email,status,flag from admin where status<>'p'";
$result=mysql_query($sql); 
echo "<center><table border=\"1\">";
echo "<tr>
<th>user name</th><th>first name</th><th>last name</th><th>email</th><th>action</th><th>authority</th>
</tr>";
while ($row = mysql_fetch_row($result)) {
	echo "<tr>";	
	for($i=0;$i<4;$i++)
	{
	echo "<td>" . $row[$i] . "</td>";
	}
	if ($row[4]=='a' && $row[5]=='us')
	{
	echo "<td><form action=\"try2.php\" method=\"post\"><input type=\"hidden\" name=\"name\" value='$row[0]'/><input type=\"radio\" name=\"act\" value=\"a\" checked=\"checked\">Accept<input type=\"radio\" name=\"act\" value=\"d\">Decline</td>";
echo"<td><input type=\"radio\" name=\"flag\" value=\"ad\">admin<input type=\"radio\" name=\"flag\" value=\"us\" checked=\"checked\">user</td><td><input type=\"submit\" value=\"submit\"/></form></td>";
	}
	else if ($row[4]=='a' && $row[5]=='ad')
	{
	echo "<td><form action=\"try2.php\" method=\"post\"><input type=\"hidden\" name=\"name\" value='$row[0]'/><input type=\"radio\" name=\"act\" value=\"a\" checked=\"checked\">Accept<input type=\"radio\" name=\"act\" value=\"d\">Decline</td>";
echo"<td><input type=\"radio\" name=\"flag\" value=\"ad\" checked=\"checked\">admin<input type=\"radio\" name=\"flag\" value=\"us\" >user</td><td><input type=\"submit\" value=\"submit\"/></form></td>";
	}
else if ($row[4]=='d' && $row[5]=='ad')
	{
	echo "<td><form action=\"try2.php\" method=\"post\"><input type=\"hidden\" name=\"name\" value='$row[0]'/><input type=\"radio\" name=\"act\" value=\"a\" >Accept<input type=\"radio\" name=\"act\" value=\"d\" checked=\"checked\">Decline</td>";
echo"<td><input type=\"radio\" name=\"flag\" value=\"ad\" checked=\"checked\">admin<input type=\"radio\" name=\"flag\" value=\"us\" >user</td><td><input type=\"submit\" value=\"submit\"/></form></td>";
	}
	else if ($row[4]=='d' && $row[5]=='us')
	{
	echo "<td><form action=\"try2.php\" method=\"post\"><input type=\"hidden\" name=\"name\" value='$row[0]'/><input type=\"radio\" name=\"act\" value=\"a\" >Accept<input type=\"radio\" name=\"act\" value=\"d\" checked=\"checked\">Decline</td>";
echo"<td><input type=\"radio\" name=\"flag\" value=\"ad\" checked=\"checked\">admin<input type=\"radio\" name=\"flag\" value=\"us\" checked=\"checked\">user</td><td><input type=\"submit\" value=\"submit\"/></form></td>";
	}	
	echo "</tr>";
}
echo "</table>";
?>
</body>
</html>







<!--<form action="register.php" method="post">
<table border="0">
<tr>
<td>USER NAME</td><td>:</td><td> <input type="text" name="uname" /></td>
</tr>
<tr>
<td>FIRST NAME</td><td>:</td><td> <input type="text" name="fname" /></td>
</tr>
<tr>
<td>LAST NAME</td><td>:</td><td> <input type="text" name="lname" /></td>
</tr>
<tr>
<td>Your Email</td><td>:</td><td> <input type="text" name="email" /></td></br>
</tr>
<tr>
<td>Enter Password</td><td>:</td><td> <input type="password" name="rpassword" /></td>
</tr>
<tr>
<td>re-Enter Password</td><td>:</td><td> <input type="password" name="cpassword" /></td></br>
</tr>
<tr>
<td></td><td></td>
<td><input type="submit" value="Register" /></td>
</tr>
</table>
</form>
-->
