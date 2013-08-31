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
	<div id="search1">
		<div id="logo" style="float:left">insert</div>	
		<form action="optgroup.php" method="post">
		<p>
		<select name="value">
   		 <option value="class"><b>Class</b></option>
 	  	 <option value="relationship"><strong>Relationship</strong></option>
		<option value="abstractentity"><b>AbstractEntity</b></option>  	
		<optgroup label="Property">
   		 <option value="substance">Substance</option>
   		 <option value="action">Action</option>
		<option value="quality">Quality</option>
 		 </optgroup>
		</select>
		<input type="text" name="insert">
   	     <input type="submit" value="Insert">
		</p>	
		</form>
	<div style="font-size:11px; color:#FFFF00; margin-top:10px"><?php echo $_SESSION['erinsert'];$_SESSION['erinsert']=""; ?></div>
	<div id="logo" style="float:left">Delete</div>
	<form action="optgroupdel.php" method="post">
	<p>
	<select name="value">
   	 <option value="class"><b>Class</b></option>
   	 <option value="relationship"><strong>Relationship</strong></option>
	<option value="abstractentity"><b>AbstractEntity</b></option>  	
	<optgroup label="Property">
   	 <option value="substance">Substance</option>
   	 <option value="action">Action</option>
	<option value="quality">Quality</option>
 	 </optgroup>
	</select>
	<input type="text" name="insert"/>
        <input type="submit" value="Delete">
	</p>	
	</form>
	<div style="font-size:11px; color:#FFFF00; margin-top:10px"><?php echo $_SESSION['erdelete'];$_SESSION['erdelete']=""; ?></div>
	<div id="logo">Rename</div>		
<form action="optgroupren.php" method="post">
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
<div style="font-size:11px; color:#FFFF00; margin-top:10px"><?php echo $_SESSION['errename'];$_SESSION['errename']=""; ?></div> 
	</div>
<?php
include('tables.php');
?>
</div>
</body>
</html>
