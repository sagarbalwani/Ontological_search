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
	<div id="logo">delete_edge</div>
	<form action="optgroupdelrelationgraph.php" method="post">
	<table border="0">
	<tr>
	<td>Entity1</td><td>:</td><td><input type="text" name="entity1" /></td>
	</tr>
	<tr>
	<td>Relation</td><td>:</td><td><input type="text" name="whatdelete" /></td>
	</tr>
	<tr>
	<td>Entity2</td><td>:</td><td><input type="text" name="entity2" /></td>
	</tr>
	</table>
	<input type="submit" value="delete" />
	</form>
	<div style="font-size:11px; color:#FFFF00; margin-top:10px"><?php echo $_SESSION['erdeleterelationgraph']; $_SESSION['erdeleterelationgraph']="";?></div>
	<div id="logo">deletenode</div>
	<form action="optgroupdelnodegraph.php" method="post">
	<table border="0">
	<tr>
	<td>Node</td><td>:</td><td><input type="text" name="whatdelete" /></td>
	</tr>
	</table>
	<input type="submit" value="delete" />
	</form>
	<div style="font-size:11px; color:#FFFF00; margin-top:10px"><?php echo $_SESSION['erdeletenodegraph']; $_SESSION['erdeletenodegraph']="";?></div>
	<form action="editgraph.php">
	<input type="submit" value="more_edit_options" />
	<form>	
	</div>
<?php
include('graphtable.php');
?>
</div>
</body>
</html>
