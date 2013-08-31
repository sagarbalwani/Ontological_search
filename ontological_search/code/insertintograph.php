<?php
include('lock.php');

$whichgraph=$_SESSION['whichgraph'];
$entity1=$_POST['entity1'];
$relation=$_POST['relation'];
$entity2=$_POST['entity2'];

$sql1="select * from entity where name='$entity1' and flag <> 2";
$sql2="select * from entity where name='$relation' and flag = 2";
$sql3="select * from entity where name='$entity2' and flag <> 2";

$result1=mysql_query($sql1);
$result2=mysql_query($sql2);
$result3=mysql_query($sql3);

$count1=mysql_num_rows($result1);
$count2=mysql_num_rows($result2);
$count3=mysql_num_rows($result3);

//echo "entity1 $count1 relation $count2 entity3 $count3";

if($count1==0 || $count2==0 || $count3==0){
	$_SESSION['erinsertgraph']="cannot insert element not in dictionary ";
	echo " cannot insert into graph as element not in dictionary ";
}
else{
	$sql4="insert into $whichgraph values('$entity1','$relation','$entity2')";
	$result4=mysql_query($sql4);
	if(!$result4){
		$_SESSION['erinsertgraph']="already existing entry";
		echo mysql_error();
	}
	else{
	$_SESSION['erinsertgraph']="";
		echo "inserted";
	}
}
header("Location: insertgraph.php");
?>
