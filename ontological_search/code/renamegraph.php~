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
	<div id="logo">renameedge</div>
	<form action="optgrouprenrelationgraph.php" method="post">
	<table border="0">
	<tr>
	<td>Entity1</td><td>:</td><td><input type="text" name="fromnode" /></td>
	</tr>
	<tr>
	<td>Modify</td><td></td><td>Relation</td>
	</tr>
	<tr>
	<td>From</td><td>:</td><td><input type="text" name="from" /></td>
	</tr>
	<tr>
	<td>To</td><td>:</td><td><input type="text" name="to" /></td>
	</tr>
	<tr>
	<td>Entity2</td><td>:</td><td><input type="text" name="tonode" /></td>
	</tr>
	</table>
	<input type="submit" value="Rename" />
	</form>
	<div style="font-size:11px; color:#FFFF00; margin-top:10px"><?php echo $_SESSION['errenamerelationgraph'];$_SESSION['errenamerelationgraph']=""; ?></div>
	<div id="logo">renamenode</div>		
<form action="optgrouprennodegraph.php" method="post">
<table border="0">
<tr>
<td>From</td><td>:</td><td><input type="text" name="from" /></td>
</tr>
<tr>
<td>To</td><td>:</td><td><input type="text" name="to" /></td>
</tr>
</table>
<input type="submit" value="Rename" />
</form>
<div style="font-size:11px; color:#FFFF00; margin-top:10px"><?php echo $_SESSION['errenamenodegraph'];$_SESSION['errenamenodegraph']=""; ?></div>


	</form>
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
