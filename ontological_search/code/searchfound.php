<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>ontology</title>
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
			<li class="current_page_item"><a href="./search.php">Search</a></li>
			<li><a href="./logout.php">Log Out</a></li>
			</ul>
		</div>
		<!--<div id="search1">-->

		<div id="idu">
			<div id="logo" style="float:left">search</div>	
			<form style="align:right" action="searchfound.php" method="get">   
             			<input type="text" name="var"/></br>
				<input type="submit" value="Search"/>
			</form>
			<div id="logo" style="float:left">view graph</div>	
			<form style="align:right" action="trial.php" method="post">   
             			<input type="text" name="graph"/></br>
				<input type="submit" value="Search"/>
			</form>
		</div>
<?php
include('lock.php');
$var=$_GET['var'];
$words= preg_split('/~/', $var); 
//$enitity1=$var;
$sql="SHOW TABLES FROM testphp";
$result=mysql_query($sql);
$c=0;
if(!$result)
{
echo "hi";
}
	echo "<h1><center></br>results found in following graphs</br></br></h1>";
	echo "<center><table border=\"0\">";	
	while ($row = mysql_fetch_row($result)) 
	{//	if ($words[1]=='')	
	//	{echo $words[0] ;}
	//	else
	//	{echo $words[1];}
	
		if($row[0]=='entity' || $row[0]=='admin')
			{
	//		echo "got $row[0]";		
			}
		
	else
		{
			if ($words[1]=='')	
				{	
			 $sql3="select * from $row[0] where entity1='$words[0]' OR entity2='$words[0]'";
			 $result3=mysql_query($sql3);
	//			echo "hi";
						if($result3)
						  {
					$count=mysql_num_rows($result3);
					if($count!=0)
					{	
						echo "<tr>";
						echo "<td>" . $row[0] . "</td>";
			echo "<td><form action=\"trial2.php\" method=\"get\"><input type=\"hidden\" name=\"graph\" value='$row[0]'/><input type=\"hidden\" name=\"entity\" value='$words[0]'/><input type=\"submit\" value=\"view result\"/></form></td>";
						echo "</tr>";
					}
						   }
				}
			else if ($words[1]=='OR' || $words[1]=='or')	
			{ $sql3="select * from $row[0] where entity1='$words[0]' OR entity2='$words[0]'  OR entity1='$words[2]' OR entity2='$words[2]' ";
			 $result3=mysql_query($sql3);
				if($result3)
			  {
				$count=mysql_num_rows($result3);
				if($count!=0)
				{
					echo "<tr>";
						echo "<td>" . $row[0] . "</td>";
			echo "<td><form action=\"orand.php\" method=\"get\"><input type=\"hidden\" name=\"entity\" value='$words[0]'/><input type=\"hidden\" name=\"entity2\" value='$words[2]'/><input type=\"hidden\" name=\"graph\" value='$row[0]'/><input type=\"submit\" value=\"view result\"/></form></td>";
						echo "</tr>";
				}
			   }			
			}
			else if ($words[1]=='AND' || $words[1]=='and')
			{
				$sql3="select * from $row[0] where entity1='$words[0]' OR entity2='$words[0]'";
			 	$result3=mysql_query($sql3);
				$sql4="select * from $row[0] where entity1='$words[2]' OR entity2='$words[2]'";
			 	$result4=mysql_query($sql4);
				if($result3)
						  {
					$count1=mysql_num_rows($result3);
					$count2=mysql_num_rows($result4);
					if($count1!=0 && $count2!=0 )
						{
						echo "<tr>";
						echo "<td>" . $row[0] . "</td>";
				echo "<td><form action=\"orand.php\" method=\"get\"><input type=\"hidden\" name=\"graph\" value='$row[0]'/><input type=\"hidden\" name=\"entity\" value='$words[0]'/><input type=\"hidden\" name=\"entity2\" value='$words[2]'/><input type=\"submit\" value=\"view result\"/></form></td>";								
						echo "</tr>";
					}
						   }
			}
			
		}		
	}	
?>
	
	</div>
</div>
</body>
</html>

