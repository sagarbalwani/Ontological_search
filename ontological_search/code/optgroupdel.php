<?php
include('lock.php');
$var=$_POST['value'];
$insert=$_POST['insert'];

$flag=0;//flag tells what is the flag of the entity to be deleted
	if($var=='class'){
		$flag=1;
		echo "flag is now one";
	}
	else if($var=='relationship'){
		$flag=2;
	}
	else if($var=='abstractentity'){
		$flag=3;	
	}
	else if($var=='substance'){
		$flag=4;
	}
	else if($var=='action'){
		$flag=5;
	}
	else if($var=='quality'){
		$flag=6;
	}
echo "$flag";


//$dupresult=mysql_query($sql);
$sql2="select * from entity";
$result2=mysql_query($sql2);
$existflag=0;
//$sql2="select * from $row[0]"
//$result2=mysql_query($sql2);
while($row2=mysql_fetch_row($result2)){
	if($row2[1]==$flag && $row2[0]==$insert){
		$existflag=1;
		echo "found element in dictionary\n";
	}
}
echo "$existflag";
if($existflag==1){
	$deleteme=1;
	$sql = "SHOW TABLES FROM testphp";
	$result = mysql_query($sql);

	while ($row = mysql_fetch_row($result)) {
		if($row[0]=='entity' || $row[0]=='admin'){
			echo "got $row[0]";		
		}
		else{
			$sql3="select * from $row[0]";
			$result3=mysql_query($sql3);
			$count=mysql_num_rows($result3);
			if($count!=0){
				echo "count is $count";
			}
			while($row3=mysql_fetch_row($result3)){
				echo "$row3[0] == $insert || $row3[1]==$insert || $row3[2]==$insert";
				if($row3[0]==$insert || $row3[1]==$insert || $row3[2]==$insert){
					$deleteme=0;
					echo "$deleteme";
				}
			}
		}
	}	
	echo "delete me is $deleteme";

	if($deleteme==1){
		echo "i am in delete me";
		$sql4="delete from entity where name='$insert' ";
		$xxx=mysql_query($sql4);
		echo "$xxx";
		if(!$xxx)
		{
			$_SESSION['erdelete']="something went wrong";
		}
		else{
		$_SESSION['erdelete']="";
		echo "element deleted.....";}
	}
	else{
		$_SESSION['erdelete']="element being used by some graph";
		echo " i will not delete it.....";
	}
}
else{
//print error message here.....*********
$_SESSION['erdelete']="element not in $var";
echo "element does not exist in dictionary\n";
}
header("Location: modify.php");
?>
