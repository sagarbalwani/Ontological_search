<?php
include('lock.php');
$var=$_GET['var'];
$words= preg_split('/~/', $var); 
//$enitity1=$var;
$sql="SHOW TABLES FROM testphp";
$result=mysql_query($sql);
if(!$result)
{
echo "hi";
}
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
						echo $row[0];
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
					echo $row[0];
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
						echo $row[0];
					}
						   }
			}
			
		}		
	}	
?>
<?php
echo "<h3><center></br>results found</br></br></h3>";

//include('lock.php');
$sql="select username,fname,lname,email from admin where status='p'";
$result=mysql_query($sql); 
echo "<center><table border=\"1\">";
echo "<tr>
<td>user name</td><td>first name</td><td>last name</td><td>email</td><td>action</td><td>authority</td>
</tr>";
while ($row = mysql_fetch_row($result)) {
	echo "<tr>";	
	for($i=0;$i<4;$i++)
	{
	echo "<td>" . $row[$i] . "</td>";
	}
	echo "<td><form action=\"try.php\" method=\"post\"><input type=\"hidden\" name=\"name\" value='$row[0]'/><input type=\"radio\" name=\"act\" value=\"a\" checked=\"checked\">Accept<input type=\"radio\" name=\"act\" value=\"d\">Decline</td>";
echo"<td><input type=\"radio\" name=\"flag\" value=\"ad\">admin<input type=\"radio\" name=\"flag\" value=\"us\" checked=\"checked\">user</td><td><input type=\"submit\" value=\"submit\"/></form></td>";
	echo "</tr>";
}
echo "</table>";
?>

