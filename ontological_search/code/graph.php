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
			<li><a href="./modify.php">Modify Dictionary</a></li>
 			<li class="current_page_item"><a href="./graph.php">Create Graph</a></li>			
			<li><a href="./search.php">Search</a></li>
			<li><a href="./logout.php">Log Out</a></li>
		</ul>
	</div>
 	<div id="idu">
		<div id="logo" style="float:left">new</div>
		<form action="optgroupselectgraph.php" method="post">		
		<input type="text" name="table1"/>
	        <input type="submit" value="create">	
		</form>
		<div style="font-size:11px; color:#FFFF00; margin-top:10px"><?php echo $_SESSION['ernewgraph']; $_SESSION['ernewgraph']="";?></div>	
		<div id="logo" style="float:left">existing</div>
		<form action="optgroupselectgraph.php" method="post">		
		<input type="text" name="table2"/>
	        <input type="submit" value="load">	
		</form>
		<div style="font-size:11px; color:#FFFF00; margin-top:10px"><?php echo $_SESSION['erloadgraph']; $_SESSION['erloadgraph']="";?></div>
		<div id="logo" style="float:left">delete</div>	
		<form action="actualdeletegraph.php" method="post">		
		<input type="text" name="deletegraph"/>
	        <input type="submit" value="delete" onclick="return confirm ('Do you really want to delete this graph?');" >	
		</form>	
		<div style="font-size:11px; color:#FFFF00; margin-top:10px"><?php echo $_SESSION['eractualdeletegraph']; $_SESSION['eractualdeletegraph']="";?></div>		
	</div>
	<div id="mytable1">	
<?php

//include('lock.php');
//mysql_select_db("testphp") or die("Unable");

$sql = "SHOW TABLES FROM testphp";
$result = mysql_query($sql);

if (!$result) {
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: ' . mysql_error();
}

else{
	echo "<table border='1'>
	<tr>
	<th>Graphs_already_Present</th>
	</tr>";

	while ($row = mysql_fetch_row($result)) {
		if($row[0] == 'admin' or $row[0]=='entity');
		else{
		   echo "<tr>";
		   echo "<td>" . $row[0] . "</td>";
		   echo "</tr>";
		}
	}
	echo "</table>"; 
}
?>
</div>
</div>
	</body>
</html>
