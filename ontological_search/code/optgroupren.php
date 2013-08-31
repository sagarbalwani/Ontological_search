<?php
include('lock.php');
$from=$_POST['from'];
$to=$_POST['to'];
echo " i am in rename";
$sql="update entity set name='$to' where name='$from' ";
$result=mysql_query($sql);

if (!$result) {
	$_SESSION['errename']="name already taken";
    echo 'MySQL Error: ' . mysql_error();
}
else{
	if(mysql_affected_rows()==0){
		$_SESSION['errename']="element doesn't exists";
		echo "element does not exist";
	}
	else{
		$_SESSION['errename']="";
		echo "name updated to $to ";
	}
}
header("Location: modify.php");

?>
