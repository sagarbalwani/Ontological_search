<?php
include('lock.php');
$var=$_POST['value'];
$insert=$_POST['insert'];

if($var=="class")
{	
	$sqreg="insert into entity values('$insert',1)";
		$result=mysql_query($sqreg);
//	header("Location: class.php"); 
}
else if($var=="relationship")
{
		$sqreg="insert into entity values('$insert',2)";
		$result=mysql_query($sqreg);
//		header("Location: relationship.php");
}
else if($var=="abstractentity")
{
		$sqreg="insert into entity values('$insert',3)";
		$result=mysql_query($sqreg);
//		header("Location: abstractentity.php");
}
else if($var=="substance")
{
	$sqreg="insert into entity values('$insert',4)";
	$result=mysql_query($sqreg);
//	header("Location: substance.php"); 
}
else if($var=="action")
{
		$sqreg="insert into entity values('$insert',5)";
		$result=mysql_query($sqreg);
//		header("Location: action.php"); 
}
else if($var=="quality")
{
		$sqreg="insert into entity values('$insert',6)";
		$result=mysql_query($sqreg);
//		header("Location: action.php");
}
if(!$result)
	{
		$_SESSION['erinsert']="element already present";
	}
else
{$_SESSION['erinsert']="";}
$_SESSION['errename']="";
$_SESSION['erdelete']="";
header("Location: ./modify.php");	
?>	
