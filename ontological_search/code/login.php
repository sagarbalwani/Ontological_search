<?php

include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form 

$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['password']); 

$sql="SELECT username,status FROM admin WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);
//echo "sasa";
//echo $result;
$row=mysql_fetch_array($result);
$active=$row['active'];

$count=mysql_num_rows($result); 


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1 and $row['status']=='a')
{
	session_register("myusername");
	$_SESSION['login_user']=$myusername;
	
	header("location: welcome.php");
	//echo $result;
}
else if($count!='1')
{
$error="Your Login Name or Password is invalid";
}
else if($row['status']=='p')
{
$error="Your request is pending(to be approaved by admin)";
}
else if($row['status']=='d')
{
$error="You have been declined by admin";
}
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ontology</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<body>
<!--<div id="wrapper">-->
	<div id="menu-wrapper">
		<!--<div id="menu">
		<div id ="header">-->
			<div id="logo" style="float:left">Ontology</div>		
		<!--</div>-->
		<div style="color:#FFFFFF; padding:30px;" align="right">					
	 		<form action="" method="post">   
             		 <label>UserName  :</label><input type="text" name="username"/>
               		   <label>Password  :</label><input type="password" name="password" />
                	  <input type="submit" value="Login"/>
			</form>
<div style="font-size:11px; color:#FFFF00; margin-top:10px"><?php echo $error;$error=""; ?></div>
		</div> 
	</div>
<div id="aboutl"><img src="images/pics01.jpg" alt="" width="350" height="350" class="aligncenter" /></div>
	<!-- end #menu -->
<!--	<div id="header">
		<div id="logo">
			<h1><a href="#">RedAllOver</a></h1>
		</div>
	</div>-->
	<!-- end #header -->
	<div id="about">
<center>
<h2> Sign UP</h2>
<form action="register.php" method="post">
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
<div style="font-size:11px; color:#FFFF00; margin-top:10px"><?php echo $_SESSION['errregister']; $_SESSION['erregister']="";?></div>
	<!--<h2 class="title">Amet mattis fringilla nisl</h2>
		<p><img src="images/pics01.jpg" alt="" width="225" height="225" class="alignleft" /></p>-->
	</div>
</body>
</html>
