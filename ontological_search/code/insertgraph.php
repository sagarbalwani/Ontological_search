<?php

include('lock.php');

?>
<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>ontology</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
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
	
	<div id ="search2">
	<div id="logo">insertedge</div>
	<form action="insertintograph.php" method="post">
	<table border="0">
	<tr>
	<td>Entity1</td><td>:</td><td><input type="text" name="entity1" /></td>
	</tr>
	<tr>
	<td>Relation</td><td>:</td><td><input type="text" name="relation" /></td>
	</tr>
	<tr>
	<td>Entity2</td><td>:</td><td><input type="text" name="entity2" /></td>
	</tr>
	</table>	
	<input type="submit" value="insert" />
	</form>
	<form action="editgraph.php">
<div style="font-size:11px; color:#FFFF00; margin-top:10px"><?php echo $_SESSION['erinsertgraph']; $_SESSION['erinsertgraph']="";?></div>		
	<input type="submit" value="more_edit_options" />
	<form>	
	</div>
	<?php
	include('graphtable.php');	
	?>

</div>
</body>
</html>
