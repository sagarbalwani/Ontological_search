<?php

include('lock.php');

$whichgraph=$_SESSION['whichgraph'];//tells which graph has to be updated.....
$whatdelete=$_POST['whatdelete'];//what relation or node to be deleted??

$sql = "delete from $whichgraph where entity1='$whatdelete' or entity2='$whatdelete' ";
	$result = mysql_query($sql);
	if(!$result){
		$_SESSION['erdeletenodegraph']="something went wrong";
		echo "cannot delete because of some error";
		echo 'MySQL Error: ' . mysql_error();
	}
	else if(mysql_affected_rows()==0){
		$_SESSION['erdeletenodegraph']="node does not exist";		
		echo "node does not exist";
	}
	else{
		$_SESSION['erdeletenodegraph']="";
		echo "relation deleted ";
	}
header("Location: deletegraph.php");
?>
