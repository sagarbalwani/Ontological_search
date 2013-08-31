	<div id="mytable">
	<?php
//mysql_select_db("testphp") or die("Unable");

$sql = "Select * FROM entity";
$result = mysql_query($sql);

if (!$result) {
echo "DB Error, could not list tables\n";
echo 'MySQL Error: ' . mysql_error();
}
else{
echo "<table border='1'>
<tr>
<th>Classes</th>
</tr>";

while ($row = mysql_fetch_row($result)) {
if($row[1]==1){
echo "<tr>";
echo "<td>" . $row[0] . "</td>";
echo "</tr>";
}
}
echo "</table>";
}
?>
	</div>

	<div id="mytable">
	<?php

//include('config.php');
//mysql_select_db("testphp") or die("Unable");

$sql = "Select * FROM entity";
$result = mysql_query($sql);

if (!$result) {
echo "DB Error, could not list tables\n";
echo 'MySQL Error: ' . mysql_error();
}
else{
echo "<table border='1'>
<tr>
<th>Relationship</th>
</tr>";

while ($row = mysql_fetch_row($result)) {
if($row[1]==2){
echo "<tr>";
echo "<td>" . $row[0] . "</td>";
echo "</tr>";
}
}
echo "</table>";
}
?>
	</div>

	<div id="mytable">
	<?php
//include('config.php');
//mysql_select_db("testphp") or die("Unable");

$sql = "Select * FROM entity";
$result = mysql_query($sql);

if (!$result) {
echo "DB Error, could not list tables\n";
echo 'MySQL Error: ' . mysql_error();
}
else{
echo "<table border='1'>
<tr>
<th>Abstract_entity</th>
</tr>";

while ($row = mysql_fetch_row($result)) {
if($row[1]==3){
echo "<tr>";
echo "<td>" . $row[0] . "</td>";
echo "</tr>";
}
}
echo "</table>";
}
?>
	</div>
	<div id="mytable">
	<?php

//include('config.php');
//mysql_select_db("testphp") or die("Unable");

$sql = "Select * FROM entity";
$result = mysql_query($sql);

if (!$result) {
echo "DB Error, could not list tables\n";
echo 'MySQL Error: ' . mysql_error();
}
else{
echo "<table border='1'>
<tr>
<th>Substance</th>
</tr>";

while ($row = mysql_fetch_row($result)) {
if($row[1]==4){
echo "<tr>";
echo "<td>" . $row[0] . "</td>";
echo "</tr>";
}	
}
echo "</table>";
}
?>
	</div>
	<div id="mytable">
	<?php

//include('config.php');
//mysql_select_db("testphp") or die("Unable");

$sql = "Select * FROM entity";
$result = mysql_query($sql);

if (!$result) {
echo "DB Error, could not list tables\n";
echo 'MySQL Error: ' . mysql_error();
}
else{
echo "<table border='1'>
<tr>
<th>Action</th>
</tr>";

while ($row = mysql_fetch_row($result)) {
if($row[1]==5){
echo "<tr>";
echo "<td>" . $row[0] . "</td>";
echo "</tr>";
}
}
echo "</table>";
}
?>
	</div>
	<div id="mytable">
	<?php

//include('config.php');
//mysql_select_db("testphp") or die("Unable");

$sql = "Select * FROM entity";
$result = mysql_query($sql);

if (!$result) {
echo "DB Error, could not list tables\n";
echo 'MySQL Error: ' . mysql_error();
}
else{
echo "<table border='1'>
<tr>
<th>Quality</th>
</tr>";

while ($row = mysql_fetch_row($result)) {
if($row[1]==6){
echo "<tr>";
echo "<td>" . $row[0] . "</td>";
echo "</tr>";
}
}
echo "</table>";
}
?>
	</div>
	
