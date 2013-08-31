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
	<div id="menu-wrapper">
	<div id="menu">
		<ul>
				<li><a href="./welcome.php">Home</a></li>
				<li class="current_page_item"><a href="./modify.php">Modify Dictionary</a></li>
 				<li><a href="./graph.php">Create Graph</a></li>			
				<li><a href="./search.php">Search</a></li>
				<li><a href="./logout.php">Log Out</a></li>	
		</ul>
	</div>
	<div id="idu">
	<div id="logo" style="float:left">relationship</div>	
	<form action="" method="post">
	<p>
	<input type="text" name="insert">
        <input type="submit" value="Insert">
	</p>	
	</form> 
	</div>
	</div>
	<?php
		$insert=$_POST['insert'];		
		$sqreg="insert into entity values('$insert',2)";
		mysql_query($sqreg);
	?>
</body>
</html>
