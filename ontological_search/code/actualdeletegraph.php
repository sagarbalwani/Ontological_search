<?php
include('lock.php');
$delete=$_POST['deletegraph'];
$sql = "drop table $delete";
$result = mysql_query($sql);
if(!$result)
{
	$_SESSION['eractualdeletegraph']="graph doesn't exists";
}
else{
$_SESSION['eractualdeletegraph']="";
}
header("Location: graph.php");
?>
