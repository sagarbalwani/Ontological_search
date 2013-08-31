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
			<li><a href="./welcome.php">Home</a></li>
			<li><a href="./modify.php">Modify Dictionary</a></li>
 			<li class="current_page_item"><a href="./graph.php">Create Graph</a></li>
			<li><a href="./search.php">Search</a></li>
			<li><a href="./logout.php">Log Out</a></li>
			<h3>Selected graph is <?php echo $_SESSION['whichgraph']; ?><h3>
		</ul>
	</div>
	<div id="modify">
	<div id="menu">
		<ul>
			<li><a href="./insertgraph.php">insert_element</a></li>
			<li><a href="./deletegraph.php">delete_element</a></li>
			<li><a href="./renamegraph.php">rename_element</a></li>
		</ul>
	</div>
	</div>
	</div>
</div>
</body>
</html>
