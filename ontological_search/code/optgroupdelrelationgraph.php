<?php
include('lock.php');

$whichgraph=$_SESSION['whichgraph'];//tells which graph has to be updated.....
$whatdelete=$_POST['whatdelete'];//what relation or node to be deleted??

$entity1=$_POST['entity1'];
$entity2=$_POST['entity2'];


	$sql="delete from $whichgraph where relation='$whatdelete' and entity1='$entity1' and entity2='$entity2' ";
	$result=mysql_query($sql);
	if(!$result){
		$_SESSION['erdeleterelationgraph']="something went wrong";
		echo "cannot delete because of some error";
		echo 'MySQL Error: ' . mysql_error();
	}
	else if(mysql_affected_rows()==0){
		$_SESSION['erdeleterelationgraph']="edge doesn't exist";	
		echo "relation does not exist";
	}
	else{
		$_SESSION['erdeleterelationgraphgraph']="";
		echo "relation deleted ";
	}
header("Location: deletegraph.php");
?>
