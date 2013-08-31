<?php
include('lock.php');
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
			<li class="current_page_item"><a href="./welcome.php">Home</a></li>
			<li><a href="./modify.php">Modify Dictionary</a></li>
 			<li><a href="./graph.php">Create Graph</a></li>
			<li><a href="./search.php">Search</a></li>
			<li><a href="./logout.php">Log Out</a></li>
		</ul>
	</div>
			</div>
</div>
<h1>Welcome <?php echo $login_session; ?></h1>
<?php
$sql="select flag from admin where username='$login_session'";
$result=mysql_query($sql); 
$row = mysql_fetch_row($result); 
if($row[0]=="ad")
{
echo "<h3><center><u><a href=\"./admin.php\" input type=\"submit\"><div style=\"color:#ffffff\">pending registration requests</div></a></u></h3>";echo "<h3><center><u><a href=\"./admin2.php\" input type=\"submit\"><div style=\"color:#ffffff\">edit registrations</div></a></u></h3>";
}
echo "<div style=\"margin-left: 270px;\">";
include('welcomescreen.php');
echo"</div>";
echo "<div><center><u><a href=\"./usermanual.php\" ><div style=\"color:#ffffff\">User Guide</div></a></u></div>";
?>	
</body>
</html>
