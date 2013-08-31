	<div id="mytable1">
		<?php
			$graph=$_SESSION['whichgraph'];
			//include('config.php');
			//mysql_select_db("testphp") or die("Unable");
			
			$sql = "select * FROM $graph";
			$result = mysql_query($sql);
			
			if (!$result) {
			echo "DB Error, could not list tables\n";
			echo 'MySQL Error: ' . mysql_error();
				}
				else{
			echo "<table border='1'>
			<tr>
			<th>Entity1</th><th>Relation</th><th>Entity2</th>
			</tr>";
			
			while ($row = mysql_fetch_row($result)) {
			
			echo "<tr>";
			echo "<td>" . $row[0] . "</td>";
			echo "<td>" . $row[1] . "</td>";
			echo "<td>" . $row[2] . "</td>";
			echo "</tr>";
				
			}
			echo "</table>";
			}
			?>
	</div>
	<div id="mytable1">
	<?php
$flag1=0;$flag2=0;$flag3=0;$flag4=0;$flag5=0;$flag6=0;
//include('config.php');
//mysql_select_db("testphp") or die("Unable");

$sql = "Select * FROM entity order by flag,name";
$result = mysql_query($sql);

if (!$result) {
echo "DB Error, could not list tables\n";
echo 'MySQL Error: ' . mysql_error();
}
else{
echo "<table border='1'>
<tr>
<th>Dictionary</th>
</tr>";

while ($row = mysql_fetch_row($result)) {
if($row[1]==1 && $flag1==0){
	echo"<tr>
	<th>class</th>
	</tr>";
	$flag1=1;
		}
else if($row[1]==2 && $flag2==0){
	echo"<tr>
	<th>Relation</th>
	</tr>";
$flag2=1;
		}
else if($row[1]==3 && $flag3==0){
	echo"<tr>
	<th>Abstract</th>
	</tr>";
	$flag3=1;
		}
else if($row[1]==4 && $flag4==0){
	echo"<tr>
	<th>substance</th>
	</tr>";
$flag4=1;
		}
else if($row[1]==5 && $flag5==0){
	echo"<tr>
	<th>Action</th>
	</tr>";
$flag5=1;
		}
else if($row[1]==6 && $flag6==0){
	echo"<tr>
	<th>Quality</th>
	</tr>";
$flag6=1;
		}
	echo "<tr>";
	echo "<td>" . $row[0] . "</td>";
	echo "</tr>";
//}	
}
echo "</table>";
}
?>
	</div>
	
